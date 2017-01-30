<?php
require_once"baseController.php";
class SliderController extends BaseController{
	public function actionIndex(){

		$model=new Slider();
		$slider=$model->findAll();
		$this->render("slider/list",array("slider"=>$slider));
	}

}
?>