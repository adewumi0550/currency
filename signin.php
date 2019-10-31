<?php
session_start();
if (strlen($_SESSION['id']<0)) {
  header('location:#');
  } else{
	
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<link href="css/heroic-features.css" rel="stylesheet">
    <title>Welcome </title>
    <link href="css/heroic-features.css" rel="stylesheet">

    <style>
    *{
    	-moz-box-sizing:border-box
    	box-sizing:border-box;
    }
body{
	margin:0;
	padding-top:70px;
	font-family: "helvetica Neue", helvetica,Arial,san-serif;
	font-size:14px;
	line-height:1.4285;
	color:#333;
	background-color:#fff;
	-moz-box-sizing:border-box;
	box-sizing: border-box;
}
.container{
	width:1170px;
	padding-right:15px; 
	padding-left:15px;
	margin-left: auto;
	margin-right:auto;
}
hr{
	margin-top:20px;
	margin-bottom:20px;
	border:0; 
	border-top: 1px solid #eee;
    height:0px;
    box-sizing:content-box;
}
.navbar-inverse{
	background-color: #222;
	border-color: #080808;
}
.navbar-fixed-top{
	top:0px;
	border-width:0 0 1px;
	border-radius: 0;
	position:fixed;
	right:0px;
	left:0px;
	z-index:1030;
}
.navbar-fixed-bottom{
	position:fixed;
	right:0px;
	left:0px;
	z-index:1030;
	border-radius: 0;
}
.navbar{
	min-height:50px;
	margin-bottom: 20px;
	border:1px solid transparent;
}

    </style>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Welcome !</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <header class="jumbotron hero-spacer">
            <div>
            <h1>Welcome!</h1> 
                        </div>
            <p>This page will enable us update you on currencies of your choice</p>
        
            <form>
                <p>Now enter a currency of your choice</p>
                <label>currency 1</label>
                  <input type="text">
            </select><br/><br/>
            <label>currency 2</label>
        
                <input type="text">

            </form>
            
        </header>

        <hr>


      


        </div>

        <hr>


    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php } ?>