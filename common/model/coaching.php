<?php
require_once "base.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Coaching extends base
{
	public $primary="id";
	
	public function getAttributes()
	{
		return['tracking_no','name', 'dob', 'gender', 'email', 'res_mobile', 'mobile', 'school_name', 'standered', 'year', 'last_percentage', 'address', 'subject','father_name', 'occupation', 'father_mobile', 'father_email', 'mother_name', 'mother_occupation', 'mother_mobile', 'mother_email'];
	}

	public function tableName(){
		return "coaching";
	}
}
?>	 