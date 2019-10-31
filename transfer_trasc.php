<?php 

include 'header.php'; 
//select all values from empInfo table
// include 'database.php';
// echo $mywallet_id;
$data="SELECT * FROM payment where sender = '$mywallet_id' OR reciever = '$mywallet_id'";
$query=mysqli_query($con,$data);          




?>



<div class="blank">
    	<h2>My Wallet Transcation </h2>
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
                                      <th>S/N</th>
                                      <th>Transcation Type</th>
                                      <th>Benefincary</th>                                   
                                      <th>Amount</th>
                                      <th>Transction ID</th>
                                      <th>Status</th> 
                                      <th>Date</th>
                                     
                                  </tr>
                              </thead>
                              <tbody>



                                <?php 

                                  while($row=mysqli_fetch_array($query)){
                                    $field1name = $row["id"];
                                    $field2name = $row["transc_id"];
                                    $field3name = $row["reciever"];
                                    $field4name = $row["amount"];
                                    $field5name = $row["trascation_id_code"];
                                    $field6name = $row["created_date"]; ?>
                             
                                    <tr> 
                                              <td><?php echo $field1name; ?></td>
                                              <td><?php echo $field2name; ?></td>
                                               <td><?php echo $field3name; ?></td>
                                                <td><?php echo $field4name; ?></td>
                                                 <td><?php echo $field5name; ?></td>

                                                <td><i class="alert-success">Success</i></td>
                                                <td><?php echo $field6name; ?></td>
                                          </tr>
                               <?php }?>

                                 
                       
                              
                          </tbody>
                      </table>
                  </div>
             </div>
      </div>
    	</div>
    </div>

<?php include 'footer.php'; ?>