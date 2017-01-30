<?php
require_once "base.php";
class Testimonial extends Base{
	public $primary='id';

	public function getAttributes()
	{

		return  ['content','author','created_by','updated_by','cretaed_on']; 		
	}


	public function tableName()
	{
		return "testimonials"; 
	}
}
?>