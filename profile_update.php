<?php 


if (isset($_POST['register'])) {
    

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone = $_POST['phone'];
 $email = $_POST['email'];
  // $password = $_POST['password'];
   $state = $_POST['state'];
   $address = $_POST['address'];


   $acct_name = $_POST['acct_name'];
   $bank_acct = $_POST['bank_acct'];
   $bank_name = $_POST['bank_name'];

    // die();
include 'database.php';


    $sql = "UPDATE user SET fname='$fname',lname='$lname',Mobile='$phone',state='$state',address='$address',bank_name='$bank_name',acct_name='$acct_name',bank_acct='$bank_acct' WHERE Email='$email'";
if(mysqli_query($con, $sql)){
   echo '<script>alert("Profile updated successfully.");</script>';
    header("Location: user.php");
} 
}


 ?>