<?php 

 $id  = $_GET['id'];
// die();
include 'header.php'; 




// $success='';
// if (isset($_POST['save'])) {
	
// 	$cname = $_POST['cname'];
// 	$amount = $_POST['amount'];
// 	$Abbreviation =  $_POST['abb'];
	$query = "SELECT * FROM currency_money WHERE id ='$id'";

  $result = mysqli_query($con,$query);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $abb = $row["abb"];
        $cname = $row["cname"];
        $amount = $row["amount"];
    }
}






?>



<div class="blank">
    	<h2>Update Currency</h2>
    	<div class="blankpage-main">
    		<?php 
    		if (!empty($success)) {
    		 	echo '<div class="alert alert-success">'.$success.'</div>';
    		 } ?>
    		<form action="currency_update.php" method="POST">
    			<div class="group">
    				<div class="form-group">
    					<label>Currency Name</label>
    					<input type="text" class="form-control" name="cname" value="<?php echo $cname; ?>" required="required" placeholder="US Dollar">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
    				</div>
    			</div>

    			<div class="group">
    				<div class="form-group">
    					<label>Amount USD($)</label>
    					<input type="money"   class="form-control" name="amount" value="<?php echo $amount; ?>"  required="required" placeholder="1.00">
    				</div>
    			</div>

    			<div class="group">
    				<div class="form-group">
    					<label>Abbreviation</label>
    					<input type="text" class="form-control" name="abb" value="<?php echo $abb; ?>"  placeholder="USD">
    				</div>
    			</div>



    			<div class="group">
    				<div class="form-group">
    					<input type="submit" class="btn btn-success" name="update" value="Update Currency">
    				</div>
    			</div>


    		</form>
    	</div>
    </div>

<?php include 'footer.php'; ?>