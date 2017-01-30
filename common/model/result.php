<?php
require_once "base.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Result extends base
{
	public $primary="id";
	
	public function getAttributes()
	{
		return['name','mark','image','class','comment','created_by','updated_by','cretaed_on'];
	}

	public function tableName(){
		return "results";
	}
}
?>