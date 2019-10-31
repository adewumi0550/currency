<?php 

include 'header.php'; 
$success='';
if (isset($_POST['save'])) {
	
	$cname = $_POST['cname'];
	$amount = $_POST['amount'];
	$Abbreviation =  $_POST['abb'];
	$query = "INSERT INTO currency_money(cname,amount,abb) VALUES('$cname','$amount','$Abbreviation')";

  if (mysqli_query($con,$query)) {
        $success = "Currency successfully Added";
  }

}



?>



<div class="blank">
    	<h2>Add Currency</h2>
    	<div class="blankpage-main">
    		<?php 
    		if (!empty($success)) {
    		 	echo '<div class="alert alert-success">'.$success.'</div>';
    		 } ?>
    		<form action="add_currency.php" method="POST">
    			<div class="group">
    				<div class="form-group">
    					<label>Currency Name</label>
    					<input type="text" class="form-control" name="cname" required="required" placeholder="US Dollar">
    				</div>
    			</div>

    			<div class="group">
    				<div class="form-group">
    					<label>Amount USD($)</label>
    					<input type="money"   class="form-control" name="amount" required="required" placeholder="1.00">
    				</div>
    			</div>

    			<div class="group">
    				<div class="form-group">
    					<label>Abbreviation</label>
    					<input type="text" class="form-control" name="abb" placeholder="USD">
    				</div>
    			</div>



    			<div class="group">
    				<div class="form-group">
    					<input type="submit" class="btn btn-success" name="save" value="Add Currency">
    				</div>
    			</div>


    		</form>
    	</div>
    </div>

<?php include 'footer.php'; ?>