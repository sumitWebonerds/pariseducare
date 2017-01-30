<?php
$email = $_POST['email'];

$con = mysqli_connect("localhost", "root", "password", "daycare_db");
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql = "INSERT INTO `subscribe`(`email`) VALUES ('$email')";
if(mysqli_query($con,$sql)){
	echo "successful";
}

mysqli_close($con);

?>
