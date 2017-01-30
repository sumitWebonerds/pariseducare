<?php
include "baseController.php";

class SiteController extends BaseController{

	function actionlogin(){
		$model=new Loginform();
		if(isset($_POST['email']) && $_POST['password']){
		$model->email=$_POST['email'];
		$model->password=$_POST['password'];
		if($model->login())
				{
					$this->redirect("user/create");
				} 
		
		
		}
		$this->render("site/login");
	}


	function actionIndex()
	{
		//findall slider with limit
		$modelslider=new Slider();
		$slider=$modelslider->findAll(array('limit'=>5,'order'=>"id desc"));
		 
		//findall services with limit
		$model= new Service();
		$service=$model->findAllByLimit($limit=3);
		
		//findall gallery with limit
		$modelgallery=new Gallery();
		$gallery=$modelgallery->findAllByLimit($limit=6);
		//findall Testimonial with limit
		$model= new Testimonial();
		$testimonial=$model->findAllByLimit($limit=3);
		//findall news with limit
		$model=new News();
		$news=$model->findAllByLimit($limit=4);
		$this->render("site/index",array("service"=>$service,"gallery"=>$gallery,"slider"=>$slider,"testimonial"=>$testimonial,"news"=>$news));
	}
	function actionAbout(){
		$this->render("site/about");
	}
	function actionContact(){
		$model=new user();
		$users=$model->findAll();
		$this->render("site/contact",array('users' => $users));
	}
	function actionGallery(){
		$model=new Gallery();
		$gallery=$model->findAll();
		$this->render("site/gallery",array("gallery"=>$gallery));
	}

	function actionTestimonial(){
			$model= new Testimonial();
			$testimonial=$model->findAll();
			$this->render("site/testinomial",array("testimonial"=>$testimonial));
			
	}
	function actionResult(){
			$model= new Result();
			$result=$model->findAll();
			$this->render("site/result",array("result"=>$result));
			
	}
	function actionService(){
			$model= new Service();
			$service=$model->findAll();
			$this->render("site/service",array("service"=>$service));
			
	}

	function actionNews(){
		$model=new News();
		$news=$model->findAll();
		$this->render("site/news",array("news"=>$news));
	}

	function actionCrons(){
			$model=new Coaching();
			$coaching=$model->findAll();
			//print_r($coaching);exit;
			
			foreach ($coaching as $coaching ) {
				// echo $coaching['father_email'];
				// exit;

				$id=$coaching["id"];
								
				//$cc = $coaching['mother_email'];
				$email = $coaching['father_email'];	
				$sname =  $coaching['name'];
				$mail = new PHPMailer;
                $mail->isSMTP();             // Set mailer to use SMTP
                $mail->Host = 'localhost';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;     // Enable SMTP authentication
                $mail->Username = 'admin@pariseducare.com';   // SMTP username
                $mail->Password = 'admin123';  
                $mail->From="admin@pariseducare.com";
                $mail->FromName="Pari's Edu Care"; // SMTP password
                $mail->addAddress($email);     // Add a recipient
              	//$mail->AddCC($cc);
                $mail->WordWrap=1000;
                $mail->isHTML(true);   // Set email format to HTML
                $mail->Subject = $sname.' Attendence Report';
               $mail->Body    = "
                		<div style='border: solid 1px black'>
                				<div style='color: #fff!important;
    background-color: #2196F3!important; padding:20px;'>Pari's Edu Care</div>
                				<div style='padding:50px;'>
                					<div style='padding:10px;'>
                					<strong>Hello ".$coaching['father_name'].",</strong>
                					</div>
                					<div style='padding:10px;'>
		                				This email is from <strong> pari's edu care </strong> By clicking following link you can check your kid's weekly report.
		                				<div style='padding:25px;'>	 
		                				<center>
		                				<a style='text-decoration:none; color:white; background-color:#2196F3; padding:20px; border-radius:2px;' href='www.pariseducare.com/index.php?a=site/reports&coaching_id=$id'>Click Here</a>
                						</center>
                						</div>
                					</div>
                				</div>
                					<div style='color: #fff!important;
    background-color: #2196F3!important; padding:20px;'>All Right Resereved By Pari's Educare </div>	
                				</div>";
                $mail->AltBody = "
                				<strong>Hello ".$coaching['father_name'].",</strong>
                				This email is from <strong> pari's edu care </strong> By clicking following link you can check your kid's weekly report. 
                				<a href='www.pariseducare.com/index.php?a=site/reports&coaching_id=$id'>Click Here</a>	
                				";
                
                if(!$mail->send()) {
                    echo "<div class='alert alert-danger'>Please Try Again</div>";
                } else {

                            echo "<div class='alert alert-success'>Meassage send successfully</div>";
                }
               
            }
		$this->render("site/crons");
	}
	function actionCronsCopy(){
			$model=new Admission();
			$admission=$model->findAll();
			foreach ($admission as $admission ) {
				$id=$admission["id"];
				$email = $admission['email'];
				$sname =  $admission['first_name'].' '.$admission['father_name'].' '.$admission['last_name'];
				$father_name =  $admission['father_name'].' '.$admission['last_name'];
				$mail = new PHPMailer;
                $mail->isSMTP();             // Set mailer to use SMTP
                $mail->Host = 'localhost';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;     // Enable SMTP authentication
                $mail->Username = 'admin@pariseducare.com';   // SMTP username
                $mail->Password = 'admin123';  
                $mail->From="admin@pariseducare.com";
                $mail->FromName="Pari's Edu Care"; // SMTP password
                $mail->addAddress($email);     // Add a recipient
              	// $mail->AddCC($cc);
                $mail->WordWrap=1000;
                $mail->isHTML(true);   // Set email format to HTML
                $mail->Subject = $sname.' Attendence Report';
                $mail->Body    = "
                		<div style='border: solid 1px black'>
                				<div style='color: #fff!important;
    background-color: #2196F3!important; padding:20px;'>Pari's Edu Care</div>
                				<div style='padding:50px;'>
                					<div style='padding:10px;'>
                					<strong style='text-transform: capitalize;'>Hello ".$father_name.",</strong>
                					</div>
                					<div style='padding:10px;'>
		                				This email is from <strong> pari's edu care </strong> By clicking following link you can check your kid's weekly report.  
		                				<div style='padding:25px;'>	 
		                				<center>
		                				<a style='text-decoration:none; color:white; background-color:#2196F3; padding:20px; border-radius:2px;' href='www.pariseducare.com/index.php?a=site/reports&id=$id'>Click Here to Check Report >></a>
                						</center>
                						</div>
                					</div>
                				</div>
                					<div style='color: #fff!important;
    background-color: #2196F3!important; padding:20px;'>All Right Resereved By Pari's Educare </div>	
                				</div>";
                $mail->AltBody = "
                				<strong>Hello ".$father_name.",</strong>
                				This email is from <strong> pari's edu care </strong> By clicking following link you can check your kid's weekly report. 
                				<a href='www.pariseducare.com/index.php?a=site/reports&id=$id'>Click Here</a>	
                				";
                
                if(!$mail->send()) {
                    echo "<div class='alert alert-danger'>Please Try Again</div>";
                } else {

                            echo "<div class='alert alert-success'>Meassage send successfully</div>";
                }
            }
		$this->render("site/cronscopy");
	}
	function actionReports(){
			
		$admission=new Admission();
		$attendence=new Attendence();
		
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			if(isset($_POST['submit'])){
				$from=$_POST['from_date'];
				$to=$_POST['to_date'];
				$student=$admission->findByPk($id);	
				$name = $student['first_name'].' '.$student['father_name'].' '.$student['last_name'];
				$track_no=$student['tracking_no'];				
				$record= $attendence->findByTrackingId($track_no,$from,$to);
				$this->render("site/reports",array('record'=>$record,'name'=>$name));
			}else{					
					$student=$admission->findByPk($id);	
					$track_no=$student['tracking_no'];
					$name=$student['first_name'].' '.$student['father_name'].' '.$student['last_name'];

					$day = date('w');
					
					$week_start = date('Y-m-d', strtotime('-'.($day-1).' days'));
					$week_end = date('Y-m-d', strtotime('+'.(6-$day).' days'));	
					$record=$attendence->findByTrackingId($track_no,$week_start,$week_end);
					$this->render("site/reports",array('record'=>$record,'name'=>$name));
			}
		}else if(isset($_GET['coaching_id']))
		{	
			$coaching=new Coaching();
			$attendence=new Attendence();
			$id=$_GET['coaching_id'];
			if(isset($_POST['submit'])){
				$from=$_POST['from_date'];
				$to=$_POST['to_date'];
				$student=$coaching->findByPk($id);	
				$name = $student['name'];
				$track_no=$student['tracking_no'];
				
				$record= $attendence->findByTrackingId($track_no,$from,$to);
				$this->render("site/reports",array('record'=>$record,'name'=>$name));
			}else{
			
						$coach=$coaching->findByPk($id);
						//print_r($coach);exit;
						$name=$coach['name'];
						$track_no=$coach['tracking_no'];
						
						$day = date('w');
						
						//$record= array();
						$week_start = date('Y-m-d', strtotime('-'.($day-1).' days'));
						$week_end = date('Y-m-d', strtotime('+'.(6-$day).' days'));
						$record=$attendence->findByTrackingId($track_no,$week_start,$week_end);
						//exit;
					
						
						$this->render("site/reports",array('record'=>$record,'name'=>$name));}
		}else{
			$error="
			<div class='col-md-offset-4 col-md-4'>
			<div class='alert alert-danger'><strong>Bad Request !!!</strong> Contact Administrators</div>
			</div>";
				$this->render('site/reports',array('error'=>$error));
		}
		$this->render("site/reports");	
	}


} 


?>