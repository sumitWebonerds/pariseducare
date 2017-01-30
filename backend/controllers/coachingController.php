<?php
ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
require_once "baseController.php";

class CoachingController extends BaseController{

	public function actionCreate(){
		if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
		$model=new Coaching();
		if(isset($_POST['submit'])){
		
			$model->tracking_no=$_POST['coaching']['tracking_no'];
			$model->name=$_POST['coaching']['name'];
			$model->dob=$_POST['coaching']['dob'];
			$model->gender=$_POST['coaching']['gender'];
			$model->email=$_POST['coaching']['email'];
			$model->res_mobile=$_POST['coaching']['res_mobile'];
			$model->mobile=$_POST['coaching']['mobile'];
			$model->school_name=$_POST['coaching']['school_name'];
			$model->standered=$_POST['coaching']['standered'];
			$model->year=$_POST['coaching']['year'];
			$model->last_percentage=$_POST['coaching']['last_percentage'];
			$model->address=$_POST['coaching']['address'];
			$model->subject=$_POST['coaching']['subject'];
			$model->father_name=$_POST['coaching']['father_name'];
			$model->occupation=$_POST['coaching']['occupation'];
			$model->father_mobile=$_POST['coaching']['father_mobile'];
			$model->father_email=$_POST['coaching']['father_email'];
			$model->mother_name=$_POST['coaching']['mother_name'];
			$model->mother_occupation=$_POST['coaching']['mother_occupation'];
			$model->mother_mobile=$_POST['coaching']['mother_mobile'];
			$model->mother_email=$_POST['coaching']['mother_email'];
			//$model->created_=date('Y-m-d');

		 if(isset($_GET['id']))
			 {

				$model->id = $_GET['id']; 
			 	if($model->update())
				{
					$this->redirect("coaching/list");
			 	} 

		 }	
			 else{
			  if($model->save())
				{
			 		$this->redirect("coaching/list");
				}
		 }
		}
		$this->render('coaching/form');
	}
	 public function actionDelete(){
	 	$model=new coaching();
	 	$model->id=$_GET['id'];
	 	$model->DeleteByPk($model->id);
	 	$this->redirect("coaching/list");
	 }
	public function actionList(){
		if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
		$model=new coaching();
		$coaching=$model->findAll();
		$this->render("coaching/index",array('coaching'=>$coaching));
	}
	public function actionView(){
	$model=new coaching();
	$model->id =$_GET['id'];
	//print_r($model);
    //exit;
	$id = $model->id;
	$coaching=$model->findByPk($id);
	$this->render('coaching/view',array("coaching"=>$coaching));
} 
}
?>