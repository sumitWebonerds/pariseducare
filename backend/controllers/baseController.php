<?php 
ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
class  BaseController
{	
	public $header; 

	public function render($file,$params=array())
	{
		extract($params); 

		if(empty($this->header))
		{
			require_once ("views/layout/header.php"); 
		}
		else
		{
			require_once ("views/layout/".$this->header.".php"); 

		}
		require_once ("views/".$file.".php"); 
		require_once ("views/layout/footer.php"); 
	}

	public function redirect($action)
	{
	 	header("location:index.php?a={$action}");
		 exit; 
	}

	public function setHeader($header)
	{
		$this->header = $header; 
	}	
}
?>