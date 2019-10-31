<?php 

include 'header.php'; 
//select all values from empInfo table
$data="SELECT * FROM   currency_money  ";
$query=mysqli_query($con,$data);          




?>



<div class="blank">
    	<h2>Currency Table</h2>
    	<div class="blankpage-main">
    		<div class="col-md-12 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                   Currency 
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>S/N</th>
                                      <th>Currency</th>
                                      <th>Values</th>                                   
                                                                        
                                      <th>Unit</th>
                                      <th>Date</th>
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
                                    $field5name = $row["created_date"];
                                     ?>
                             
                                    <tr> 
                                              <td><?php echo $field1name; ?></td>
                                              <td><?php echo $field2name; ?></td>
                                               <td><?php echo $field3name; ?></td>
                                                <td><?php echo $field4name; ?></td>
                                                 <td><?php echo $field5name; ?></td>
                                                 <td><a class="btn btn-success" href="update_currency.php?id=<?php echo $field1name; ?>">
                                                 <i class="fa fa-money"></i> Update </a></td>
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