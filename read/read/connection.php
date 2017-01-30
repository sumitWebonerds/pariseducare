<?php
$con = mysql_connect("localhost","root","") or die(mysql_error()); 

if(!$con){
 echo ("connection failed".mysql_error());
}

$selectdb = mysql_select_db('ajax_db',$con); 
if(!$selectdb){
 echo("db selection failed".mysql_error()); 
}
?>