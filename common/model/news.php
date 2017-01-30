<?php
require_once "base.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class News extends base
{
	public $primary="id";
	
	public function getAttributes()
	{
		return['title','file_name','content','date','time','created_by','updated_by','created_on'];
	}

	public function tableName(){
		return "news";
	}
}
?>