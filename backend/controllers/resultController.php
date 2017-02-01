<?php
require_once "baseController.php";

class ResultController extends BaseController{

	public function actionCreate(){
		if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
		if(isset($_POST['result'])){
			$model=new Result();
			try{
				if(!empty($_FILES['uploadfile']['name'])){
				$file_name = $_FILES['uploadfile']['name'];
				$image_tmp = $_FILES['uploadfile']['tmp_name'];
				$extension = strtolower(substr($file_name,strpos($file_name,'.') + 1));
				$actual_name = pathinfo($file_name,PATHINFO_FILENAME);
				$original_name = $actual_name;
				$extension =pathinfo($file_name,PATHINFO_EXTENSION);

				while(file_exists('../upload/result/'.$actual_name.'.'.$extension)){
					$actual_name = $original_name.'_'.rand();
					$file_name = $actual_name.'.'.$extension;
				}
				move_uploaded_file($image_tmp,'../upload/result/'.$file_name);
				$model->image = $file_name;
			}
				 $model->name=$_POST['result']['name'];
		 		$model->mark=$_POST['result']['mark'];
		 		$model->class=$_POST['result']['class'];
				 $model->created_by=$_SESSION['user']['id'];
				$model->created_on=date('Y/m/d');
				$model->comment=$_POST['result']['comment'];
				if(isset($_GET['id']))
				{

				$model->id = $_GET['id']; 
				
				if($model->update())
				{
					$this->redirect("result/list");
				} 

			}
			else
			{
			if($model->save())
				{
					$this->redirect("result/list");
				}
			}


			}
			catch(Exception $e){
				print_r($e);
			}
	}


		$this->render("result/form");

	}
	 public function actionDelete(){
	 	$model=new Result();
	 	$model->id=$_GET['id'];
		
	 	$model->DeleteByPk($model->id);
	 	$this->redirect("result/list");
	 }
	public function actionList(){
		if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
		$model=new Result();
		$result=$model->findAll();
		$this->render("result/list",array('result'=>$result));
	}
	public function actionView(){
	$model=new Result();
	$model->id =$_GET['id'];
	//print_r($model);
    //exit;
	$id = $model->id;
	$result=$model->findByPk($id);
	$this->render('result/view',array("result"=>$result));
} 
}
?>