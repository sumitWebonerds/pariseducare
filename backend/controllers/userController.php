<?php 
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
include_once "baseController.php";
class  UserController extends BaseController
{	

	 public function actionCreate()
	 {
	 	if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
	 	if(isset($_POST['user']))
	 	{
			$model = new User(); 

			$model->name = $_POST['user']['name']; 
		 	$model->email = $_POST['user']['email'];
			$model->password =$_POST['user']['password']; 
			$model->address = $_POST['user']['address']; 
			$model->contact = $_POST['user']['contact'];
			$model->site_name = $_POST['user']['site_name'];
			$model->created_by=$_SESSION['user']['id'];
			$model->created_at=  date("Y/m/d");
			if(isset($_GET['id']))
			{

				$model->id = $_GET['id'];
				$users=array("id"=>$model->id,"name"=>$model->name,"email"=>$model->email,"password"=>$model->password,"address"=>$model->address,"contact"=>$model->contact,"site_name"=>$model->site_name);
				if($model->update())
				{
				$_SESSION['user']=$users; 
				$this->redirect("user/profile");
				} 

			}
			else
			{

				if($model->save())
				{
					$this->redirect("user/create");
				} 
		}
	 	} 

	 	$this->render("user/form");

	 }	
	 public function ActionChangePassword(){
	 	if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
	 		$model=new User();
	 		$id=$_SESSION['user']['id'];
		 		if(isset($_POST['user']))
		 	{
			 		$newpassword=$_POST['user']['newpassword'];
			 		$confirmpassword=$_POST['user']['confirmpassword'];
			 		
			 		$oldpassword=$model->findByPk($id);
			 		$model->id= $id;	
					$model->password=$_POST['user']['confirmpassword'];
				 		if($oldpassword['password']==$_POST['user']['password'])
				 		{
				 			if($newpassword==$confirmpassword)
				 			{
					 			if($model->update())
					 			{
					 				echo "<div class='alert alert-success'>'password change successfully'</div>";
					 				
					 			}
					 			else{
					 				echo "<div class='alert alert-danger'>'Please Try AgAin'</div>";
					 			}
				 			}
				 			else{
				 				echo "<div class='alert alert-danger'>'New Password & confirm password does not match'</div>";
				 			}
				 		}
				 		else{
				 			echo "<div class='alert alert-danger'>'password does not match Please try again'</div>";
				 		}
		 	}
	 	$this->render("user/changepassword");
	 }

	 public function actionProfile(){
	 	if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
	 	    $user=$_SESSION['user'];
	 	    $this->render("user/profile"); 
	 }

	 

}
?>