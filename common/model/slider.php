<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "base.php";
 class Slider extends Base{
 	public $primary="id";

 	public function getAttributes(){
 		return['name','caption','status','created_by','updated_by','cretaed_on'];
 	}

 	public function tableName(){
 		return "banners";
 	}
 }

?>