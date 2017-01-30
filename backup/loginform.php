<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "base.php";
require_once "../PHPMailer/class.phpmailer.php";
require_once "../PHPMailer/class.smtp.php";
class Loginform extends Base{

	 function login(){
		$tableName="users";
		$email= $this->email;
		$password=$this->password;
		$sql="SELECT * FROM {$tableName} WHERE email= :email AND password=:password"; 
		$statement =  $this->conn->prepare($sql);
		$statement->bindParam(':email', $email);
    	$statement->bindParam(':password', $password);
    	$statement->execute();
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC); 
        
    	$count=$statement->rowCount();
    	if($count==1){
            foreach ($statement->fetchAll() as $user) {
            $id=$user['id'];
            $name= $user['name'];
            $email=$user['email'];
            $address=$user['address'];
            $contact=$user['contact'];
            $site_name=$user['site_name'];
        }
        $user=array('id' => $id,"name"=>$name,"email"=>$email,"address"=>$address,"contact"=>$contact,"site_name"=>$site_name );
    		$_SESSION['user'] = $user;
            return 1;
    	}else{
    		return 0;
    	}

	}
    function forgot(){
        $tableName="users";
        $email = $this->email;
        $sql = "SELECT * FROM {$tableName} WHERE email= :email";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(':email',$email);
        $statement->execute();
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
        $count=$statement->rowCount();
        if($count == 1){

                $mail = new PHPMailer;
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'localhost';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = '';                 // SMTP username
                $mail->Password = '';  
                $mail->From="";
                $mail->FromName="";                         // SMTP password
                $mail->addAddress($email);     // Add a recipient
                $mail->WordWrap=1000;
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Here is the subject';
                $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                if(!$mail->send()) {
                    echo 'Message could not be sent.';
                } else {
                    echo 'Message has been sent';
                }
        }else{
            echo 'fail';
        }
    }
    function reset(){
        $pass = $this->pass;
        $resetpass = $this->resetpass;
        
        if($pass == $resetpass){
            echo 'true';
        }else{
            echo 'false';
        }
    }

}
?>