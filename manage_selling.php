<?php 

include 'header.php'; 
//select all values from empInfo table
// include 'database.php';
// echo $mywallet_id;
$data="SELECT * FROM payment where transc_id='sell'";
$query=mysqli_query($con,$data);          




?>



<div class="blank">
    	<h2>Selling Transcation </h2>
    	<div class="blankpage-main">
    		<div class="col-md-12 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                   Transfer 
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      
                                      <th>Wallet ID</th>
                                      <th>Email</th>                                   
                                      <th>Amount</th>
                                      <th>Transction ID</th>
                                      <th>Status</th> 
                                      <th>Date</th>
                                      <th>Action</th>
                                     
                                  </tr>
                              </thead>
                              <tbody>



                                <?php 

                                  while($row=mysqli_fetch_array($query)){
                                    $field1name = $row["id"];
                                    $field2name = $row["sender"];
                                    $field3name = $row["email"];
                                    $field7name = $row["admin_status"];
                                    $field4name = $row["amount"];
                                    $field5name = $row["trascation_id_code"];
                                    $field6name = $row["created_date"]; ?>
                             
                                    <tr> 
                                             
                                              <td><?php echo $field2name; ?></td>
                                               <td><?php echo $field3name; ?></td>
                                                <td><?php echo $field4name; ?></td>
                                                 <td><?php echo $field5name; ?></td>

                                                <td> <?php if ($field7name==false) {
                                                 echo  ' <i class="alert-danger">pending</i>';
                                                   }else{
                                                    echo '<i class="alert-success">Confirmed</i>';
                                                   } ?>

                                                   </td>
                                                <td><?php echo $field6name; ?></td>
                                                 <td>
                                                   <?php if ($field7name==false) {?>
                                                   <a class="btn btn-primary"   href="transcation.php?id=<?php echo $field1name; ?>">Credit</a>
                                                 <?php  }else{
                                                    echo 'Transcation Confirmed';
                                                   } ?>
                                                 </td>
                                          </tr>
                               <?php }?>

                                 
                       
                              
                          </tbody>
                      </table>
                  </div>
             </div>
      </div>
    	</div>
    </div>

<script type="text/javascript">
  
</script>

<?php include 'footer.php'; ?>