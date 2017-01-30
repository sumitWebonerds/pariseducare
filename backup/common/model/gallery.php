<?php
require_once "base.php";
/**
* 
*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Gallery extends base
{
	public $primary="id";
	
	public function getAttributes()
	{
		return['name','created_by','updated_by','created_at'];
	}

	public function tableName(){
		return "gallery";
	}
}
?>