<?php
// $model=new User();
// $user=$model->findAll();

$con = mysqli_connect("localhost", "root", "password", "daycare_db");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
echo $result= mysqli_query("select * from users");

 //$array = mysqli_fetch_row($result);
 $row = mysqli_fetch_array($result);

?>