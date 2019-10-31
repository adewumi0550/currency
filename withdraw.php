<?php 

include 'header.php'; 
//select all values from empInfo table
// include 'database.php';
// echo $mywallet_id;
$data="SELECT * FROM payment where transc_id='withdraw'";
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
                                      <th>Bank Account/Bank Name</th>  
                                       <th>Account Name</th>                                  
                                      <th>Amount</th>
                                      <th>Transction ID</th>
                                     
                                      <th>Date</th>
                                      <th>Action</th>
                                     
                                  </tr>
                              </thead>
                              <tbody>



                                <?php 

                                  while($row=mysqli_fetch_array($query)){
                                    $field1name = $row["id"];
                                    $field2name = $row["sender"];
                                    $field3name = $row["bank_acct"];
                                    $field8name = $row["acct_name"];
                                    $field9name = $row["bank_name"];

                                    $field7name = $row["admin_status"];
                                    $field4name = $row["amount"];
                                    $field5name = $row["trascation_id_code"];
                                    $field6name = $row["created_date"]; ?>
                             
                                    <tr> 
                                             
                                              <td><?php echo $field2name; ?></td>
                                               <td><?php echo $field3name; ?> | <?php echo $field9name; ?></td>
                                                 <td> 
                                                  <?php echo $field8name; ?>
                                                   </td>
                                                <td><?php echo $field4name; ?></td>
                                                 <td><?php echo $field5name; ?></td>

                                              
                                                <td><?php echo $field6name; ?></td>
                                                 <td>
                                                 
                                                  <div class="alert-success">Successfully</div>
                                               
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