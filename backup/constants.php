<?php

$UPLOAD_PATH = dirname(__FILE__)."/upload/";

if($_SERVER['HTTP_HOST'] == 'localhost')
{
	
		$BASE_PATH	= "http://localhost/daycare";

}else
{
	
	$BASE_PATH= "http://pariseducare.com/";
}
?>