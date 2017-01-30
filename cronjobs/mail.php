<?php 		
		require_once('../PHPMailer/class.phpmailer.php');	
 		$email = "ssumit4078@gmail.com";
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
                $mail->Subject = 'croning JOb';
                $mail->Body    = 'croning JOb';
                $mail->AltBody = 'croning JOb';

                if(!$mail->send()) {
                    echo "<div class='alert alert-danger'>Please Try Again</div>";
                } else {

                   
                            echo "<div class='alert alert-success'>Meassage send successfully</div>";
                 
                }
               ?>