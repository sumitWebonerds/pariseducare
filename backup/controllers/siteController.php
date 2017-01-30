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
		$slider=$modelslider->findAll(array('limit'=>3,'order'=>"id desc"));
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
	
	

} 


?>