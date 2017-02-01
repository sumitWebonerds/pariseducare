<?php
require_once "baseController.php";

class ServiceController extends BaseController{

	public function actionCreate(){
		if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
		if(isset($_POST['service'])){
			$model=new Service();
			$model->name=$_POST['service']['name'];
			$model->information=$_POST['service']['information'];
			$model->created_by=$_SESSION['user']['id'];
			$model->created_on=date('Y/m/d');
			if(isset($_GET['id']))
			{

				$model->id = $_GET['id']; 
				
				if($model->update())
				{
					$this->redirect("service/list");
				} 

			}
			else
			{
			if($model->save())
				{
					$this->redirect("service/list");
				}
			}
		}
		$this->render('service/form');
	}
	 public function actionDelete(){
	 	$model=new Service();
	 	$model->id=$_GET['id'];
	 	$model->DeleteByPk($model->id);
	 	$this->redirect("service/list");
	 }
	public function actionList(){
		if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
		$model=new Service();
		$service=$model->findAll();
		$this->render("service/list",array('service'=>$service));
	}
    
    public function actionView(){
	$model=new Service();
	$model->id =$_GET['id'];
	//print_r($model);
    //exit;
	$id = $model->id;
	$service=$model->findByPk($id);
	$this->render('service/view',array("service"=>$service));
} 

}
?>