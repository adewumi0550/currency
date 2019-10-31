
<!--climate end here-->
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© <?php echo date('Y'); ?> Currency Converter<a href="#" target="_blank"></a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="user.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		       
		    

		       
		     
		         <li><a href="#"><i class="fa fa-money"></i><span>My Wallet</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-boletim" ><a href="transfer.php">Transfer Currency</a></li>
			             <li id="menu-academico-boletim" ><a href="send_money.php">Send Money</a></li>
      			            <li id="menu-academico-boletim" ><a href="withdraw_money.php">Withdraw </a></li>
      			            <li id="menu-academico-boletim" ><a href="profile.php">My Profile</a></li>




		             </ul>
		         </li>


		           <li><a href="#"><i class="fa fa-wallet"></i><span>Transcation</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="transfer_trasc.php">My Transcation</a></li>
			            <li id="menu-academico-boletim" ><a href="sell.php">Selling & Buying</a></li>
			            

		             </ul>
		         </li>

		             <?php if ($status==true) {?>
		        	 <li><a href="#"><i class="fa fa-cogs"></i><span>Currency</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="add_currency.php">Add Currency</a></li>
		            <li><a href="currency_table.php">Update Currency</a></li>		            
		          </ul>
		        </li>

		            <li><a href="#"><i class="fa fa-shopping-cart"></i><span>Management</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	<ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="manage_selling.php"> Selling</a></li>
			            <li id="menu-academico-boletim" ><a href="manage_buying.php"> Buying</a></li>
			            <li id="menu-academico-boletim" ><a href="send_transcation.php"> Send Money</a></li>
			            <li id="menu-academico-boletim" ><a href="withdraw.php">Withdraw</a></li>
		             </ul>
		         </li>
		      <?php  } ?>






		     
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->


</body>
</html>                     