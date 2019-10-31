<?php 

include 'header.php'; 
// include 'function.php';
$success='';
if (isset($_POST['transfer'])) {
	

include 'database.php'; 

     $mywallet;


     $wallet_id = $_POST['wallet_id'];


     

     // if (check_username($wallet_id)==false) {
     //    echo "Invalid Wallet Id";
     // }
	// $cname = $_POST['cname'];
	$amount = $_POST['amount'];

    if ($amount>$mywallet) {
      echo '<script>alert("Insuffienct Balance Transfer.");</script>';
      die('<a href="transfer.php">Perform Another Transcation? </a> | <a href="index.php">Return to Dashboard </a>');

     
    }else{


     $result =  mysqli_query($con,"SELECT * from user where wallet_id='$wallet_id'");
        $row = mysqli_fetch_array($result);
         $transfer = $row['wallet'];
        $true_account = $row['wallet_id'];

    if (empty($true_account) ||  $true_account===$mywallet_id) {
      echo '<script>alert("Invalid Wallet ID")</script>';
    }else{
        
        $total = $amount + $transfer;

        $charge = $mywallet -$amount;

          $deduction = "UPDATE user SET wallet='$charge'  WHERE wallet_id='$mywallet_id'";
         mysqli_query($con, $deduction) ;
         $mode ="Transfer";

 $amount = $_POST['amount'];
 $true_account;
 $mywallet_id;
$code = rand(0000,9999).time();

     $trans = "INSERT INTO payment (reciever,sender,amount,transc_id,trascation_id_code) VALUES ('$true_account','$mywallet_id','$amount','$mode','$code')";
         mysqli_query($con, $trans);

        // $row = mysqli_fetch_array($result);

    $sql = "UPDATE user SET wallet='$total'  WHERE wallet_id='$true_account'";
if(mysqli_query($con, $sql)){
   echo '<script>alert("Transfer successfully  Done.");</script>';
    // 
} 
}
    }

    }
	// $Abbreviation =  $_POST['abb'];
	// $query = "INSERT INTO currency_money(cname,amount,abb) VALUES('$cname','$amount','$Abbreviation')";

 //  if (mysqli_query($con,$query)) {
 //        $success = "Currency successfully Added";
 //  }




?>



<div class="blank">
    	<h2>Transfer Currency</h2>
        <table border="1" style="padding: 10px;">
            <tr>
                <td><b>WALLET ID</b></td>
                <td>    <b>BALANCE</b></td>

                
            </tr>
            <tr>
                 <td><?php echo $mywallet_id; ?></td>
                <td><?php if ($mywallet==true) {
                                             echo '$'.number_format((float)$mywallet, 2, '.', ',');
                                        }else{
                                            echo "$0.00";
                                        } ?> </td>
            </tr>
        </table>
    	<div class="blankpage-main">
    		<?php 
    		if (!empty($success)) {
    		 	echo '<div class="alert alert-success">'.$success.'</div>';
    		 } ?>
    		<form action="transfer.php" method="POST">
    			<div class="group">
    				<div class="form-group">
    					<label>Wallet ID</label>
    					<input type="text" class="form-control" name="wallet_id" required="required" placeholder="US Dollar">
    				</div>
    			</div>

    			<div class="group">
    				<div class="form-group">
    					<label>Amount USD($)</label>

                        <select class="form-control" name="amount" required="required">
                            <option>Amount </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="500">500</option>
                            <option value="1000">1000</option>
                        </select>
    				</div>
    			</div>





    			<div class="group">
    				<div class="form-group">
    					<input type="submit" class="btn btn-primary" name="transfer" value="Transfer">
    				</div>
    			</div>


    		</form>
    	</div>
    </div>

<?php include 'footer.php'; ?>