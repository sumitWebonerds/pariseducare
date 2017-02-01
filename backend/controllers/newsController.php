<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	include "baseController.php";

class NewsController extends BaseController{

	function actionCreate(){
		if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
		if(isset($_POST['news'])){
			$model=new News();
			try{
				if(!empty($_FILES['uploadfile']['name'])){
				$file_name = $_FILES['uploadfile']['name'];
				$image_tmp = $_FILES['uploadfile']['tmp_name'];
				$extension = strtolower(substr($file_name,strpos($file_name,'.') + 1));
				$actual_name = pathinfo($file_name,PATHINFO_FILENAME);
				$original_name = $actual_name;
				$extension =pathinfo($file_name,PATHINFO_EXTENSION);

				while(file_exists('../upload/news/'.$actual_name.'.'.$extension)){
					$actual_name = $original_name.'_'.rand();
					$file_name = $actual_name.'.'.$extension;
				}
				move_uploaded_file($image_tmp,'../upload/news/'.$file_name);
				 $model->file_name = $file_name;
				}
				 $model->title=$_POST['news']['title'];
				 $model->content=$_POST['news']['content'];
				 $model->date= date("Y/m/d");
				 $model->time= date("h:i:s"); 
				 $model->created_by=$_SESSION['user']['id'];
				$model->created_on=date('Y/m/d');
				if(isset($_GET['id']))
				{

				$model->id = $_GET['id']; 
				
				if($model->update())
				{
					$this->redirect("news/list");
				} 

			}
			else
			{
			if($model->save())
				{
					$this->redirect("news/list");
				}
			}


			}
			catch(Exception $e){
				print_r($e);
			}
	}


		$this->render("news/form");

}
public function actionDelete(){
	 	$model=new News();
	 	$model->id=$_GET['id'];
	 	$model->DeleteByPk($model->id);
	 	$this->redirect("news/list");
	 }

	function actionList(){
		if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
		$model=new News();
		$news=$model->findAll();
		$this->render("news/list",array("news"=>$news));
	}
	public function actionView(){
	$model=new News();
	$model->id =$_GET['id'];
	//print_r($model);
    //exit;
	$id = $model->id;
	$news=$model->findByPk($id);
	$this->render('news/view',array("news"=>$news));
} 

}
?>