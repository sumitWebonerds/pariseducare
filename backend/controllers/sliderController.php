<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	//error_reporting(E_ALL);
	include "baseController.php";

class SliderController extends BaseController{

	function actionCreate(){
		if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
		if(isset($_POST['slider'])){
			$model=new Slider();
			$model->status="0";
			$model->caption=$_POST['slider']['caption'];
			$model->created_on=date("Y-m-d h:i:s");
			try{
				if(!empty($_FILES['uploadfile']['name'])){
				$file_name = $_FILES['uploadfile']['name'];
				$image_tmp = $_FILES['uploadfile']['tmp_name'];
				$extension = strtolower(substr($file_name,strpos($file_name,'.') + 1));
				$actual_name = pathinfo($file_name,PATHINFO_FILENAME);
				$original_name = $actual_name;
				$extension =pathinfo($file_name,PATHINFO_EXTENSION);

				while(file_exists('../upload/'.$actual_name.'.'.$extension)){
					$actual_name = $original_name.'_'.rand();
					$file_name = $actual_name.'.'.$extension;
				}
				move_uploaded_file($image_tmp,'../upload/'.$file_name);
				$model->name = $file_name; 
				}
				//$model->created_by=$_SESSION['user']['id'];
				if(isset($_GET['id']))
				{

					$model->id = $_GET['id']; 
					
					if($model->update())
					{
						$this->redirect("slider/list");
					} 

				}
				else
				{
				if($model->save())
					{
						$this->redirect("slider/list");
					}
				}
			}
			catch(Exception $e){
				print_r($e);
			}
	}

		$this->render("slider/form");

}
	public function actionDelete(){
		$model=new Slider;
		$model->id=$_GET['id'];
		$model->DeleteByPk($model->id);
		$this->redirect("slider/list");
	}
	function actionList(){
		if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
		$model=new Slider();
		$slider=$model->findAll();
		$this->render("slider/list",array("slider"=>$slider));
	}

	


}
?>