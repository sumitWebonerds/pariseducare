<?php
require_once"baseController.php";
class TestimonialsController extends BaseController{
	public function actionCreate(){

		if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
		$model=new Testimonial();
		if(isset($_POST['submit'])){
		    $model->content=$_POST['testimonial']['content'];
		    $model->author=$_POST['testimonial']['author'];
		    $model->created_by=$_SESSION['user']['id'];
			$model->created_on=date('Y/m/d');
			if(isset($_GET['id']))
				{

					$model->id = $_GET['id']; 
					
					if($model->update())
					{
						$this->redirect("testimonials/list");
					} 

				}
				else
				{
				if($model->save())
					{
						$this->redirect("testimonials/list");
					}
				}
		}
		$this->render('testimonials/form');
	}
	public function actionList(){
		if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
		$model=new Testimonial();
		$testimonial=$model->findAll();
		$this->render("testimonials/list",array("testimonial"=>$testimonial));
	}
	public function actionDelete(){
		$model=new Testimonial(); 
		$model->id=$_GET['id'];
		$model->DeleteByPk($model->id);
		$this->redirect("testimonials/list");
	}
	public function actionView(){
	$model=new Testimonial();
	$model->id =$_GET['id'];
	//print_r($model);
    //exit;
	$id = $model->id;
	$testimonial=$model->findByPk($id);
	$this->render('testimonials/view',array("testimonial"=>$testimonial));
} 
}
?>