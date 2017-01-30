<?php
include "baseController.php";

class SiteController extends BaseController{

	function actionlogin(){
		
		$this->setHeader("login_header");

	if(isset($_SESSION['email'])){

		$this->redirect("site/index");
   	exit; 
	}

		$model=new Loginform();
		if(isset($_POST['email']) && $_POST['password']){
		$model->email=$_POST['email'];
		$model->password=$_POST['password'];
		
		if($model->login())
				{
					
					$this->redirect("site/index");
					exit; 
				} 
		
		
		}

		$this->render("site/login");
	}
	public function actionForgot(){
		$this->setHeader("login_header");	 	
	 	$model = new Loginform();
	 	if(isset($_POST['email'])){
	 		$model->email = $_POST['email'];
	 		$model->forgot();    	
	 	}
	 	$this->render("site/forgot");		
	 }
	 public function actionReset(){
	 	$this->setHeader("login_header");
	 	$model = new Loginform();
	 	if(isset($_POST['pass']) && isset($_POST['resetpass'])){
	 		 $model->pass = $_POST['pass'];
	 		$model->resetpass = $_POST['resetpass'];
	 		
	 		$model->reset();
	 	}
	 	$this->render("site/reset");		 	
	 }


	function actionLogout()
	{
		session_destroy();
		unset($_SESSION['user']);	
		$this->redirect("site/login");

	}

	//dashboard count
	function actionIndex()
		{
	
			if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
			$news= new News();
			$news=$news->count();
			$testimonial= new Testimonial();
			$testimonial=$testimonial->count();
			$subscribe= new Subscribe();
			$subscribe=$subscribe->count();
			$gallery= new Gallery();
			$gallery=$gallery->count();
			$this->render("site/index", array("news"=>$news,"testimonial"=>$testimonial,"subscribe"=>$subscribe,"gallery"=>$gallery));

		}
} 
?>