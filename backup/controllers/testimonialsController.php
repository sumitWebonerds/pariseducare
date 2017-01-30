<?php
require_once "baseController.php";
	class TestimonialsController extends BaseController{
		public function actionList(){
			$model= new Testimonial();
			$testimonial=$model->findAll();
			$this->render("testimonials/list",array("testimonial"=>$testimonial));
		}	
	}
?>