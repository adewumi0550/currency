<?php 


$success='';

// die();
include 'header.php'; 


 $email = $_SESSION['Email'];


// $success='';
// if (isset($_POST['save'])) {
    
//  $cname = $_POST['cname'];
//  $amount = $_POST['amount'];
//  $Abbreviation =  $_POST['abb'];
    $query = "SELECT * FROM user WHERE Email ='$email'";

  $Complete = mysqli_query($con,$query);





    $Rows=mysqli_fetch_assoc($Complete);


    
    $fname=$Rows['fname'];
    $lname=$Rows['lname'];
    $email=$Rows['Email'];
    $phone=$Rows['Mobile'];
     $address=$Rows['address'];
      $state=$Rows['state'];
      $acct_name = $Rows['acct_name'];
      $bank_acct = $Rows['bank_acct'];
      $bank_name = $Rows['bank_name'];






?>



<div class="blank">
    	<h2>My Profile</h2>
    	<div class="blankpage-main">
    		<?php 
    		if (!empty($success)) {
    		 	echo '<div class="alert alert-success">'.$success.'</div>';
    		 } ?>
    		<form action="profile_update.php" method="POST">
                <div class="group">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" readonly="readonly" name="fname" value="<?php echo $fname; ?>" required="required">
                        <input type="hidden" name="email" value="<?php echo $email; ?>">
                    </div>
                </div>

                <div class="group">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text"   class="form-control" readonly="readonly" name="lname" value="<?php echo $lname; ?>"  required="required">
                    </div>
                </div>

                <div class="group">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>"  placeholder="">
                    </div>
                </div>



                <div class="group">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $address; ?>"  placeholder="">
                    </div>
                </div>



                <div class="group">
                    <div class="form-group">
                        <label>State</label>
                        <input type="text" class="form-control" name="state" value="<?php echo $state; ?>"  placeholder="">
                    </div>
                </div>

                 <div class="group">
                    <div class="form-group">
                        <label>Account Name</label>
                        <input type="text" class="form-control" name="acct_name" value="<?php echo $acct_name; ?>"  placeholder="">
                    </div>
                </div>

                 <div class="group">
                    <div class="form-group">
                        <label>Bank Account</label>
                        <input type="text" class="form-control" name="bank_acct" value="<?php echo $bank_acct; ?>"  placeholder="">
                    </div>
                </div>

                 <div class="group">
                    <div class="form-group">
                        <label>Bank Name</label>
                        <input type="text" class="form-control" name="bank_name" value="<?php echo $bank_name; ?>"  placeholder="">
                    </div>
                </div>

                



                <div class="group">
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" name="register" value="update Profile">
                    </div>
                </div>


            </form>
    	</div>
    </div>

<?php include 'footer.php'; ?>