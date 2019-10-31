
<?php 
include 'database.php'; 


$rate='';
$from ='';
$to ='';
$amount = $_POST['amount'];
$from = $_POST['convert_from'];
$to = $_POST['convert_to'];



	$query = "SELECT * FROM currency_money WHERE id ='$to'";

  $result = mysqli_query($con,$query);



if ($result->num_rows > 0) {
    // output data of each row
    while($currency_to = $result->fetch_assoc()) {
         $currency_to_abb = $currency_to["abb"];
        $currency_to_cname = $currency_to["cname"];
       $currency_to_amount = $currency_to["amount"];
    }
}


	$query = "SELECT * FROM currency_money WHERE id ='$from'";

  $result = mysqli_query($con,$query);



if ($result->num_rows > 0) {
    // output data of each row
    while($currency_from = $result->fetch_assoc()) {
         $currency_from_abb = $currency_from["abb"];
        $currency_from_cname = $currency_from["cname"];
        $currency_from_amount = $currency_from["amount"];
    }
}


$rate = $amount* $currency_from_amount/$currency_to_amount;
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Currency Conveter</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Currency Converter</a>
      <a class="btn btn-primary" href="login.php">Login</a>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthd text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Currency Converter</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
     


          <div id="convert_div">
<a href="index.php" class="btn btn-primary">Convert More</a>
</div>
        </div>
      </div>
    </div>
  </header>


<!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Amount</th>
      <th scope="col">Rate</th>
    </tr>
  </thead>
  <tbody>

                                    <tr> 
                                    		  <td><?php echo $currency_from_cname; ?></td>
                                              <td><?php echo $currency_to_cname; ?></td>
                                              <td><?php echo $amount; ?></td>
                                              <td><?php echo $rate; ?></td>
                                              
                                          </tr>
                           

    
  </tbody>
</table>

        </div>
        <div class="col-lg-6">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-wallet  m-auto text-primary"></i>
            </div>
            <h3>About Currency Converter</h3>
            <p class="lead mb-0">--------About Needed----</p>
          </div>
        </div>
       
      </div>
    </div>
  </section>
  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Currency</th>
      <th scope="col">Unit</th>
      <th scope="col">Rate</th>
    </tr>
  </thead>
  <tbody>
    <?php 
           
  include 'database.php'; 
//select all values from empInfo table
$data="SELECT * FROM   currency_money  ";
$query=mysqli_query($con,$data); 



             while($row=mysqli_fetch_array($query)){
                                    $field1name = $row["id"];
                                    $field2name = $row["cname"];
                                    $field3name = $row["amount"];
                                    $field4name = $row["abb"];
                                    ?>
                             
                                    <tr> 
                                              <td><?php echo $field1name; ?></td>
                                              <td><?php echo $field2name; ?></td>
                                               <td><?php echo $field3name; ?></td>
                                                <td><?php echo $field4name; ?></td>
                                              
                                          </tr>
                               <?php }?>

    
  </tbody>
</table>

        </div>
        <div class="col-lg-6">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-wallet  m-auto text-primary"></i>
            </div>
            <h3>About Currency Converter</h3>
            <p class="lead mb-0">--------About Needed----</p>
          </div>
        </div>
       
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Currency Converter 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        
      });
    </script>
</body>

</html>
