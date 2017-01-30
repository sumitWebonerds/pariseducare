<?php 
		 //display error
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
		require_once "constants.php";

		include_once "html.php";
		include_once "common/model/user.php";
		require_once "common/model/loginform.php";
		require_once "common/model/url.php";
		require_once "common/model/slider.php";
		require_once "common/model/testimonials.php";
		require_once "common/model/service.php";
		require_once "common/model/gallery.php";
		require_once "common/model/news.php";

		 if(isset($_GET['a']))
		 {
		 	$action = explode('/', $_GET['a']);
		 	require_once "controllers/{$action[0]}Controller.php";


		 		$class = ucfirst($action[0])."Controller";
		 		
		 		$method = "action".$action[1];
				$controller = new $class; 
			 	$controller->$method();
		 }
		 else
		 {
		 	 	require_once "controllers/siteController.php";

		 	$controller = new SiteController();
		 	$controller->actionIndex();


		 }

?>
