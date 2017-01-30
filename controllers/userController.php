a<?php 

include_once "baseController.php";
class  UserController extends BaseController
{	

	 public function actionCreate()
	 {

	 	if(isset($_POST['user']))
	 	{
			$model = new User(); 

			$model->name = $_POST['user']['name']; 
			$model->email = $_POST['user']['email']; 
			$model->password = $_POST['user']['password']; 
			$model->address = $_POST['user']['address']; 
			$model->contact = $_POST['user']['contact']; 


			if(isset($_GET['id']))
			{

				$model->id = $_GET['id']; 
				
				if($model->update())
				{
					$this->redirect("user/list");
				} 

			}
			else
			{

				if($model->save())
				{
					$this->redirect("user/create");
				} 
			}
	 	} 

	 	$this->render("user/form");

	 }	

	  public function actionList()
	 {

		$model = new User(); 
		$users = $model->findAll(); 
		$this->render("user/list",array("users"=>$users));

	 }

}
?>