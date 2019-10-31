<?php 

include 'header.php'; 
$success='';
if (isset($_POST['save'])) {
	
	$rate = $_POST['rate'];
	$amount = $_POST['amount'];
    $payment = $_POST['payment'];
    $mywallet_id;
    $email;     
    $total = $rate*$amount;
     $admin = "Admin";
     $mode = "Buy Currency";
     $payment_method = $_POST['trascation_id'];
    $code = rand(0000,9999).time();
    include 'database.php';
	$query = "INSERT INTO payment(sender,email,reciever,amount,status,method_payment,transc_id,trascation_id_code) VALUES('$mywallet_id','$email','$admin','$total','$mode','$payment','$payment_method','$code')";

  if (mysqli_query($con,$query)) {
        $success = "Transcation Successfully Done,Wait for feeback";
  }

}



//select all values from empInfo table
$data="SELECT * FROM   currency_money";
$query=mysqli_query($con,$data);          

?>



<div class="blank">
    	<h2>Sell / Buy Currency</h2>
    	<div class="blankpage-main">
    		<?php 
    		if (!empty($success)) {
    		 	echo '<div class="alert alert-success">'.$success.'</div>';
    		 } ?>
    		<form action="sell.php" method="POST">





                    <div class="group">
                    <div class="form-group">
                        <label>Abbreviation</label>
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

                   <!--  <div class="group">
                    <div class="form-group">
                        <label>Transcation</label>
                        <select name="trascation" class="form-control">
                            <option value="Buy" >Buy</option>  
                             <option value="Sell" >Sell</option>   
                        </select>
                    </div>
                </div> -->

    			<div class="group">
    				<div class="form-group">
    					<label>Mode of Payment</label>
    					<select name="payment" class="form-control" >
                            <option value="Deposit">Deposit</option>  
                             <option value="Transfer">Transfer</option>   
                              <option value="Internet">Internet Banking</option>               
                        </select>
    				</div>
    			</div>



                <div class="group">
                    <div class="form-group">
                        <label>Transcation Mode</label>
                        <select name="trascation_id" class="form-control" >
                            <option value="Sell">Sell</option>  
                             <option value="Buy">Buy</option>   
                        </select>
                    </div>
                </div>

    			<div class="group">
    				<div class="form-group">
    					<label>Amount USD($)</label>
    					<input type="number"   class="form-control" name="amount" id="amount" required="required" placeholder="1.00">
    				</div>
    			</div>

    		      <div class="group">
                    <small>Rate Amount</small>
                  <code style="color: green;font-weight: bold;" id="total_amount"></code>

                  </div>

    			<div class="group">
    				<div class="form-group">
    					<input type="submit" class="btn btn-success" name="save" value="Transcation Currency">
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
      $('#total_amount').text(total+'.0');

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