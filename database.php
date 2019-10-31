<?php 

$server = 'localhost';
$user='root';
$password='';
$dbname = 'currency';
$con = mysqli_connect($server,$user,$password,$dbname);

if (mysqli_errno($con)) {
	echo "Error in connection";
}
 ?>