<?php 


if (isset($_POST['update'])) {
    

  $abb = $_POST["abb"];
       $cname = $_POST["cname"];
       $amount = $_POST["amount"];
    $id = $_POST['id'];

include 'database.php';


    $sql = "UPDATE currency_money SET cname='$cname',amount='$amount',abb='$abb' WHERE id='$id'";
if(mysqli_query($con, $sql)){
   echo '<script>alert("Records were updated successfully.");</script>';
    header("Location: currency_table.php");
} 
}


 ?>