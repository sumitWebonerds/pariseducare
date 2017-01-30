<?php
require_once "base.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Attendence extends base
{
	public $primary="id";
	
	public function getAttributes()
	{
		return['tracking_no', 'name', 'batch', 'timing', 'arriaval_time', 'departure_time',
				'hrs_attended', 'status','user_type', 'report_of_date'];
	}

	public function tableName(){
		return "attendence";
	}
}
?>	 