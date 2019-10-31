<?php 

include 'header.php'; 
$success='';
if (isset($_POST['save'])) {
	
	include 'database.php'; 

     $mywallet;


     // $wallet_id = $_POST['wallet_id'];


     $rate =$_POST['rate'];


     // if (check_username($wallet_id)==false) {
     //    echo "Invalid Wallet Id";
     // }
  // $cname = $_POST['cname'];

     $bank_account = $_POST['bank_acct'];
     $bank_name  = $_POST['bank_name'];
     $Acct_name = $_POST['acct_name'];

     $reciever = $_POST['bank_acct'].' '.$_POST['bank_name'];
  $amount = $_POST['amount'];

  $total_rate = $rate*$amount;

    if ($total_rate>$mywallet) {
      echo '<script>alert("Insuffienct Balance Transfer.");</script>';
      die('<a href="user.php">Return to Dashboard </a>');

     
    }else{
        
        // $total = $amount + $transfer;

        $charge = $mywallet - $amount;

          $deduction = "UPDATE user SET wallet='$charge'  WHERE wallet_id='$mywallet_id'";
         mysqli_query($con, $deduction) ;
         $mode ="withdraw";

 $amount = $_POST['amount'];
 // $true_account;
 $mywallet_id;
$code = rand(0000,9999).time();

     $trans = "INSERT INTO payment (reciever,sender,amount,transc_id,trascation_id_code,bank_name,acct_name,bank_acct) VALUES ('$reciever','$mywallet_id','$total_rate','$mode','$code','$bank_name','$Acct_name','$bank_account')";
         // mysqli_query($con, $trans);

        // $row = mysqli_fetch_array($result);

//     $sql = "UPDATE user SET wallet='$total'  WHERE wallet_id='$true_account'";
if(mysqli_query($con, $trans)){
   echo '<script>alert("Transaction successfully  Done.");</script>';
    // 
} 
}
    

    }
  // $Abbreviation =  $_POST['abb'];
  // $query = "INSERT INTO currency_money(cname,amount,abb) VALUES('$cname','$amount','$Abbreviation')";

 //  if (mysqli_query($con,$query)) {
 //        $success = "Currency successfully Added";
 //  }




//select all values from empInfo table
$data="SELECT * FROM   currency_money";
$query=mysqli_query($con,$data);          

?>



<div class="blank">
    	<h2>Withdraw Wallet</h2>
    	<div class="blankpage-main">
    		<?php 
    		if (!empty($success)) {
    		 	echo '<div class="alert alert-success">'.$success.'</div>';
    		 } ?>
    		<form action="withdraw_money.php" method="POST">





                    <div class="group">
                    <div class="form-group">
                        <label>Currency</label>
                        <select class="form-control" name="rate" id="money">

             <?php  while($row=mysqli_fetch_array($query)){
                                    $field1name = $row["id"];
                                    $field2name = $row["cname"];
                                    $field3name = $row["amount"];
                                    $field4name = $row["abb"];
                                    $field5name = $row["created_date"];?>

                                    <option id="money" value="<?php echo $field3name ?>"><?php echo $field2name ?> [<?php echo $field3name ?>]</option>
                             <?php   }  ?>       
                        </select>
                    </div>
                </div>

      

               

    			<div class="group">
    				<div class="form-group">
    					<label>Amount </label>
    					<input type="number"   class="form-control" name="amount" id="amount" required="required" placeholder="0.00">
    				</div>
    			</div>



          <div class="group">
            <div class="form-group">
              <label>Bank Account Number</label>
              <input type="text" value="<?php echo $bank_acct; ?>"  class="form-control" name="bank_acct"  required="required" placeholder="">
            </div>
          </div>

          <div class="group">
            <div class="form-group">
              <label>Account Name</label>
              <input type="text"  value="<?php echo $acct_name; ?>" class="form-control" name="acct_name"  required="required" placeholder="">
            </div>
          </div>


          <div class="group">
            <div class="form-group">
              <label>Bank Name</label>
              <input type="text"  value="<?php echo $bank_name; ?>"  class="form-control" name="bank_name"  required="required" placeholder="">
            </div>
          </div>

    		      <div class="group">
                    <small>Rate Amount</small>
                  <code style="color: green;font-weight: bold;" id="total_amount"></code>

                  </div>

    			<div class="group">
    				<div class="form-group">
    					<input type="submit" class="btn btn-success" name="save" value="Withdraw">
    				</div>
    			</div>


    		</form>
    	</div>
    </div>


<script type="text/javascript">
  $(document).ready(function() {
    $('#amount').each(function() {
      $(this).keyup(function(event) {
      /* Act on the event */
      var amount = $('#amount').val();


      // alert(amount);
      var value = $('#money').val();
       var total =amount*value;
       // alert(total);
      $('#total_amount').text(total);

    });
    });


    $('#money').change(function() {
        /* Act on the event */
       $('#total_amount').text();
        $('#amount').text('0');
    });
  });
</script>
<?php include 'footer.php'; ?>