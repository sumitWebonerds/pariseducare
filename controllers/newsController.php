<?php
require_once "baseController.php";
	class NewsController extends BaseController{
		
		public function actionList(){
			$model = new News();
			if(isset($_GET['id']))
			{
				$similar = $model->findAllByLimit($limit=4);
				
				$news = $model->findByPk($_GET['id']);
				
				$this->render("news/list",array('news'=>$news,'similar'=>$similar));
			
			}
		
		}	

	}
?>