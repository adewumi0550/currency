<?php 
require 'database.php';
function check_username($username)
{

	$query = mysqli_query($con,"SELECT wallet_id FROM user where wallet_id= '$username'");
	if (mysqli_num_rows($query) > 0) {
  	  return true;
  	}else{
  		return false;
  	}
}


 ?>