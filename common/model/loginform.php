<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "base.php";
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
        $newpass=rand();

        if($count == 1){

                $mail = new PHPMailer;
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'localhost';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'admin@pariseducare.com';                 // SMTP username
                $mail->Password = 'admin123';  
                $mail->From="admin@pariseducare.com";
                $mail->FromName="pariseducare";                         // SMTP password
                $mail->addAddress($email);     // Add a recipient
                $mail->WordWrap=1000;
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Password Recovery';
                $mail->Body    = 'Your New Password is '.$newpass.' <br>Please Change Your  Password As Early As Possible';
                $mail->AltBody = 'Your New Password is '.$newpass.' Please Change Your  Password As Early As Possible';

                if(!$mail->send()) {
                    echo "<div class='alert alert-danger'>Please Try Again</div>";
                } else {

                    $model=new User();
                    $id=1;
                    $model->id= $id;
                    $model->password=$newpass;
                    if($model->update())
                        {
                            echo "<div class='alert alert-success'>Meassage send successfully</div>";
                        }
                      else{
                        echo "<div class='alert alert-success'>Please Try Again</div>";
                      }         
                }
                
        }else{
            echo "<div class='alert alert-danger'>Meassage send successfully</div>";
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