<?php 
session_start();
if(isset($_SESSION["Email"])){
header("Location: user.php");
exit();
 }

 // include 'head_page.php'; ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>LoginPage</title>
  <link rel="stylesheet" type="text/css" href="./css/main.css">

<?php $error =''; 
require 'database.php';
$uName="";
$Pass="";
$success='';
if (isset($_POST['register'])) {
  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password = $_POST['password'];

$pass = md5($password);

$wallet_id = $firstname.rand(000,999);

  $query = "INSERT INTO user(fname,lname,Email,Mobile,password,wallet_id) VALUES('$firstname','$lastname','$email','$phone','$pass','$wallet_id')";

  if (mysqli_query($con,$query)) {
        $success = "You are successfully Registred, Kindly proceed to login";
  }


}

if (isset($_POST['submit'])) 
{
  
     


  if(empty($_POST['username']))
  {
    echo '<script>alert("Kindly Provide Username ");</script>';
  }
  
  
  if(empty($_POST['password']))
  {
   echo '<script>alert("Kindly Provide Password ");</script>';
  }else{
  
   
require 'database.php';
    echo  $username = $_POST['username'];
     echo $password = $_POST['password']; 

     $pass = md5($password); 
    
       $query="SELECT * from user where email='$username' and password='$pass'";
    
    
     
      $Complete=mysqli_query($con,$query);
         
    
    $Rows=mysqli_fetch_assoc($Complete);


    
    $name=$Rows['fname'];
    $name=$Rows['lname'];
    $email=$Rows['Email'];
    $phone=$Rows['Mobile'];
    // $address=$Rows['Address'];;
    
    if($Rows['Email']==$username &&$Rows['password']==$pass)
    {

        session_start();
            $_SESSION['Email'] = $username;
             $_SESSION['password'] = $password;
        

         header("Location:user.php");
         exit();
     
    }
    else
    {
    echo "<script>alert('Wrong Username Or Password Try Again');</script>";
    }
    
      mysqli_close($connection);                     
   }
   
}
  

?>
</head>
<body>

  <!-- <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Log in</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <input id="tab-3" type="radio" name="tab" class="admin-log"><label for="tab-3" class="tab">Admin Login</label>
    
    <div class="login-form">



      <form class="sign-in-htm" action="menu.php" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input" required="">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password" required="">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        <h5><a href="index.php">Go Back to Home</a></h5>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </form>


      <form class="sign-up-htm" action="#" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input" required="">
        </div>.
        <div class="group">
          <label for="email" class="label">Email</label>
          <input id="mail" name="email" type="email" class="input" data-type="input" required="">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="pass" type="password" name="password" class="input" data-type="password" required="">
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign Up">
        </div>
        <h5><a href="index.php">Go Back to Home</a></h5>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
          </label>
        </div>
      </form>



      <form class="admin-htm" action="#" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input" required="">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password" required="">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        <h5><a href="index.php">Go Back to Home</a></h5>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>

      </form>
        </div>
      </form>
    </div>
  </div>
</div>
   -->
  <div class="login-wrap">

  <div class="login-html">
    <h2 style="text-align: center;font-size: 30px;color: #fff;padding: 19px;">Currency Converter</h2>
  <p style="color: #fff;font-size: 15px;"><?php echo $success; ?></p>
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Log in</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>

   
    <div class="login-form">
      <form class="sign-in-htm" action="login.php" method="POST">
        <div class="group">
          <label for="user" class="label">Email</label>
          <input id="email" name="username" type="email" class="input" >
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input"  data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" >
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" name="submit" class="button" value="Sign In">
        </div>
        <h5><a href="index.php">Go Back to Home</a></h5>
         
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </form>



      <form class="sign-up-htm" action="login.php" method="POST">
        <div class="group">
          <label for="user" class="label">First Name</label>
          <input id="username" name="fname" type="text" class="input" required="required">
        </div>

         <div class="group">
          <label for="user" class="label">Last Name</label>
          <input id="username" name="lname" type="text" class="input"  required="required">
        </div>


         <div class="group">
          <label for="user" class="label">Phone Number</label>
          <input id="username" name="phone" type="text" class="input" required="required">
        </div>


        <div class="group">
          <label for="email" class="label">Email</label>
          <input id="mail" name="email" type="email" class="input" data-type="input" required="required">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="pass" type="password" name="password" class="input" data-type="password" required="required">
        </div>
        <div class="group">
          <input type="submit" class="button" id="register" name="register" value="Sign Up">
        </div>
        <h5><a href="index.php">Go Back to Home</a></h5>

        <div class="hr"></div>
        <div class="foot-lnk">

          <label for="tab-1">Already Member?</a>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>