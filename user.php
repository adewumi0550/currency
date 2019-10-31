<?php 

include 'header.php'; 
//select all values from empInfo table
$data="SELECT * FROM   currency_money limit 1 ";
$query=mysqli_query($con,$data);          


if (isset($_POST['buy'])) {
echo  $amount = $_POST['amount'];
  echo $payment = $_POST['payment'];
  echo $rate = $_POST['wallet_id'];
   echo $unit = $_POST['unit'];

}

?>

	 <div class="market-updates">
	 	<p class="alert alert-success">Welcome back,<?php echo $fname; ?></p>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
						<h3><?php if ($mywallet==true) {
                                             echo '$'.number_format((float)$mywallet, 2, '.', ',');
                                        }else{
                                            echo "$0.00";
                                        } ?></h3>
						<h4><i class="fa fa-money" style="font-size: 15px;color: #fff;"> </i> My Wallet</h4>
						
					</div>
					<div class="col-md-4 market-update-right">
						
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-2">
				 <div class="col-md-8 market-update-left">
					<h3>Profile</h3>
					<h4>Online</h4>
					
				  </div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-user" style="font-size: 50px;color: #fff;"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<!--<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-8 market-update-left">
						<h3>23</h3>
						<h4>New Messages</h4>
						
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-envelope-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>-->


		</div>


		   <div class="clearfix"> </div>
		</div>

		<div class="chit-chat-layer1">
	<div class="col-md-12 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                  Today Currency 
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>S/N</th>
                                      <th>Currency</th>
                                      <th>Values</th>                                   
                                                                        
                                      <th>Status</th>
                                      <th>Progress</th>
                                      <th>Amount</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                               


                                <?php 

                                  while($row=mysqli_fetch_array($query)){
                                    $field1name = $row["id"];
                                    $field2name = $row["cname"];
                                    $field3name = $row["amount"];
                                    $field4name = $row["abb"];
                                    $field5name = $row["created_date"]; ?>
                             
                                    <tr> 
                                              <td><?php echo $field1name; ?></td>
                                              <td><?php echo $field2name; ?></td>
                                               <td><?php echo $field3name; ?></td>
                                                <td><?php echo $field4name; ?></td>
                                                 <form action="user.php" method="POST">
                                                 <td><input type="text" id="amount" required=""  name="amount" min="1"></td>
                                                 <td><span id="total_amount"></span></td>
                                                 
                                               
                                                
                                                  <input type="hidden" name="id" value="<?php echo $field1name; ?>">
                                                   <input type="hidden" name="unit" id="" value="<?php echo $field2name; ?>">
                                                     <input type="hidden" name="" id="value" value="<?php echo $field3name; ?>">
                                                     <input type="hidden" name="wallet_id" value="<?php echo $mywallet_id; ?>">
                                                     <input type="hidden" name="" value="<?php echo $email; ?>">
                                                       <td><a href="sell.php" class="btn btn-success">Buy Now</a></td>
                                                 </form>
                                          </tr>
                               <?php }?>

                                 
                          </tbody>
                      </table>
                  </div>
             </div>
      </div>
    
     <div class="clearfix"> </div>
</div>
<!--market updates end here-->
<!--mainpage chit-chating-->
<div class="chit-chat-layer1">
	<div class="col-md-6 chit-chat-layer1-left">
              
      </div>
     
     <div class="clearfix"> </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#amount').each(function() {
      $(this).keyup(function(event) {
      /* Act on the event */
      var amount = $('#amount').val();


      // alert(amount);
      var value = $('#value').val();
       var total =amount*value;
       // alert(total);
      $('#total_amount').text(total);

    });
    });
  });
</script>
<?php include 'footer.php'; ?>