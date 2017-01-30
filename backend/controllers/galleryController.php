<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	include "baseController.php";

class GalleryController extends BaseController{

	function actionCreate()
	{
		if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
		if(isset($_POST['submit'])){
			$model=new Gallery();
			try{
				

				if(!empty($_FILES['uploadfile']['name']))
				{				
					$file_name = $_FILES['uploadfile']['name'];
					$image_tmp = $_FILES['uploadfile']['tmp_name'];
					$extension = strtolower(substr($file_name,strpos($file_name,'.') + 1));
		
					$actual_name = pathinfo($file_name,PATHINFO_FILENAME);
					$original_name = $actual_name;
					$extension =pathinfo($file_name,PATHINFO_EXTENSION);

					while(file_exists('../upload/gallery/'.$actual_name.'.'.$extension)){
						$actual_name = $original_name.'_'.rand();
						$file_name = $actual_name.'.'.$extension;
					}
					move_uploaded_file($image_tmp,'../upload/gallery/'.$file_name);
					$model->name = $file_name;
				}
				$model->created_by=$_SESSION['user']['id'];
				$model->created_on=date('Y/m/d');
				if(isset($_GET['id']))
				{

					$model->id = $_GET['id']; 
					
					if($model->update())
					{
						$this->redirect("gallery/list");
					} 

				}
				else
				{
				if($model->save())
					{
						$this->redirect("gallery/list");
					}
				}

			}
			catch(Exception $e){
				print_r($e);
			}
		}

		$this->render("gallery/form");

	}
	public function actionDelete(){
	 	$model=new Gallery();
	 	$model->id=$_GET['id'];
	 	$model->DeleteByPk($model->id);
	 	$this->redirect("gallery/list");
	 }

	function actionList(){
		if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
		$model=new Gallery();
		$gallery=$model->findAll();
		$this->render("gallery/list",array("gallery"=>$gallery));
	}


}
?>