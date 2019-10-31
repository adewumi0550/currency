<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Currency Converter</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">	
</head>
<style type="text/css">
	* {
  margin: 0;
  
}
  body{
  margin:5px;
  color:#6a6f8c;
  background:#c8c8c8;
  font:600 16px/18px 'Open Sans',sans-serif;
  background-image: url("bg2.jpeg");
 background-repeat: no-repeat; 
 background-size:100%;
 }
 .lastly{
 color:#6a6f8c;
  background:red;
  font:600 16px/18px 'Open Sans',sans-serif;
 width:600px;
 background-repeat: no-repeat; 
 background-size:100%;
 border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  border:2px;
 }
.down{
margin: 4px auto;
width: 600px;

}	
table{
	background-color: white;
	width:600px;
	border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border:2px;
}
.tab{
  margin:1px;
  background-color: white;
  font:600 16px/18px 'Open Sans',sans-serif;
  background-color:#6a6f8c;
}
.container {
  width: 600px;
  margin: auto;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  border:2px;
}
.header {
  background:white;
  text-align: right;
  padding: 5px;
  color:#6a6f8c;
  background-size:50px;
border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border:2px;
}
.top{
	float:left;
	width:200px;
	height:57px;
}
.arrow{
	float:center;
	width:60px;
	height:60px;
    opacity:0.2;
}
.formbox {
background:rgba(40,57,101,.9);
height: calc(100vh - 40px - 100px - 40px - 58px);
padding: 0 1.5rem 1rem 1.5rem;
}
.form-control {
    display: inline-block;
    width: auto;
    vertical-align: ;
  }
.currency-btn {
  background-color: #00b386;
  color: #fff;
  padding: 1rem;
  font-size: 1.2rem;
  font-weight: bold;
  border: none;
  border-top: 3px solid #222;
  width: 100%;
  cursor: pointer;
  transition: background-color 0.25s;
  position: relative;
}
hr {
  height: 0;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #eee;
}
p,
h2,
h3 {
    orphans: 3;
    widows: 3;
}
h2,
h3 {
    page-break-after: avoid;
  }
input,
button,
select,
textarea {
  font-family: inheriFt;
  font-size: inherit;
  line-height: inherit;
}

.text-primary {
  color: #337ab7;
}
.container-fluid {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: bold;
  color:#aaa;
}
output {
  display: block;
  padding-top: 7px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
}

.form-control {
  display: block;
  width: 40%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  vertical-align: ;

 }
 .currencylist {
  display: block;
  width: 40%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  vertical-align: ;
 }

 .btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  border: 2px solid transparent;
  border-radius: 4px;
  color:#fff;
  text-decoration: none;
}
.btn-primary {
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
}
a:hover {
  color:#6a6f8c;
  text-decoration: none;
}

a:visited{
  color:white;
  text-decoration: none;
}
</style>
<body>
    <div class="container">
    	<div class="header">
	         <img src="img/logo.png" alt="logo" class="top"><br/>
	         <button type="submit" name="btn_submit" class="btn btn-primary form-control" style="width:15%"><a href="login.php">Login</a></button>
	    </div> 	                  
        <div class="formbox">       
	        <form method="post">
		         <br/>
		         <br/>  
				<div class="form-inline" align="center">
		        	<label><h3>Currency Converter</h3></label>
					<input class="form-control" type="text" autocomplete="off" name="txt_digit" id="input" style="width:50%" placeholder="Enter the amount" />
					<br/>       
					<label>FROM</label>
					<select name="from" id="from" class="form-control" style="width:40%" >
						<option value="AED">AED</option>
						
					</select>
					<br/>
		            <img src="img/download.png" alt="img" class="arrow"><br/>
					<label>TO</label>
					<select name="to" id= "to" class="form-control" style="width:40%">		
					</select>
					<br>
					<input class="form-control" type="text" name="result" id="result" style="width:50%" readonly="" /><br/>   
				</div>
			</form>
		</div>
	</div>
	<div class="down" >
		<table>
			<div class="tab" align="center">
				<tr id="head">
					<th colspan="2">
						<h3 style="float:">1 USD=</h3>
					</th>	


          <th colspan="2">
            <h3 style="float:left">Today Rates </h3>
          </th> 
				</tr>
			</div>	
		</table>
		<div>
		<button type="submit" name="btn_submit" class="lastly" onclick="window.location.assign('checkrate.php')"><h3>Check rates</h3></button>
		</div>
	</div>
</body>
<script type="text/javascript"src="js/app.js"></script>
<script src="js/script.js"></script>
</html> -->



<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="js/bootstrap.js">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div class="row">
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

  </div>
</div>
</body>
</html>