<?php
require_once"baseController.php";
class SubscribeController extends BaseController{
	public function actionList(){
		if(!isset($_SESSION['user'])){

				$this->redirect("site/login");
			   	exit; 
			}
		$model=new Subscribe();
		$subscribe=$model->findAll();
		$this->render("subscribe/list",array("subscribe"=>$subscribe));
	}
	
}
?>