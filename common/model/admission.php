<?php
require_once "base.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Admission extends base
{
	public $primary="id";
	
	public function getAttributes()
	{
		return['tracking_no','first_name', 'father_name', 'last_name', 'mother_name', 'dob', 'birth_place', 'age', 'child_no','gender', 'cast', 'father_education', 'father_occupation','telephone', 'res_telephone', 'pin', 'city', 'mother_education', 'mother_occupation','language_at_home', 'language_child', 'relative_name', 'email', 'bed_wetting', 'thumb_sucking', 'stuttering', 'address', 'bed_time', 'other', 'spend_afternoon','behaviour', 'other_school', 'agree','created_by','updated_by','created_on','updated_on'];
	}

	public function tableName(){
		return "students";
	}
}
?>	 