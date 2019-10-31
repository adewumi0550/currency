<?php 





 $id  = $_GET['id'];
// die();
include 'header.php'; 




// $success='';
// if (isset($_POST['save'])) {
	
// 	$cname = $_POST['cname'];
// 	$amount = $_POST['amount'];
// 	$Abbreviation =  $_POST['abb'];
	$query = "SELECT * FROM payment WHERE id ='$id'";

  $result = mysqli_query($con,$query);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // $abb = $row["abb"];
        $user_id = $row["sender"];
        $amount = $row["amount"];
    }


$result =  mysqli_query($con,"SELECT * from user where wallet_id='$user_id'");
        $row = mysqli_fetch_array($result);
         $transfer = $row['wallet'];
        $true_account = $row['wallet_id'];

        $total = $transfer-$amount;
$sql = "UPDATE user SET wallet='$total'  WHERE wallet_id='$true_account'";

	mysqli_query($con, $sql);

// $admin = "Admin Debit";
$mode = "Admin Debit";
$code = rand(0000,9999).time();
  $trans = "INSERT INTO payment (reciever,sender,amount,transc_id,trascation_id_code) VALUES ('$user_id','$admin','$amount','$mode','$code')";
         mysqli_query($con, $trans);
         $date= date('Y-m-s');

         	$on = '1';
   $sql_one = "UPDATE payment SET admin_status='$on',approve_date='$date' WHERE id='$id'";
			if(mysqli_query($con, $sql_one)){
			   echo '<script>alert("Account Debited successfully.");</script>';
			    // header("Location: manage_selling.php");
			   die('<a href="manage_selling.php">Perform Another Transcation? </a> | <a href="user.php">Return to Dashboard </a>');

			} 






}


?>