<?php 
session_start();
error_reporting(1);
if($_SESSION['create_account_logged_in2']!="")
{
header('location:Bookingform.php');
}
error_reporting(1);
require('connection.php');
?>






<!DOCTYPE html>
<html lang="en">
<head>
   <title>RMS.Com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/stylestud1.css">
  <script src="js/jsstud1.js"></script>
  <script src="js/jsstud2.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
  <link rel="stylesheet" href="font/studfont.css">
  <link href="font/studfont2.css" rel="stylesheet">
</head>
<body style="margin-top:50px;">
<?php
include('Menubarlecturer.php')
?>



 <!--  
 <div class="col-md-4">
            <h2>Sign In</h2>
<form method = "POST" action = "process/processes.php" autocomplete = "off" accept-charset="UTF-8">
    <div class="form-group">
		<label for="username">Email</label>
		<input placeholder="Enter your Email" class="form-control form-control-md" name="eid" type="text" id="username" required autofocus />
	</div>
    <div class="form-group">
		<label for="password">Password</label>
		<input placeholder="Enter your Password" class="form-control form-control-md" name="pWord" type="password" id="password" required />
	</div>
    <div class="form-group">
		<input class="btn btn-primary" type="submit" name="sign_in"  value="Sign In">
	</div>
</form>
          </div>-->










<div class="container-fluid"><!-- Primary Id-->
  <div class="container">
    <div class="row"><br>
      <div class="col-sm-4"></div>
        <div class="col-sm-4 text-center"style="box-shadow:2px 2px 2px;background-color:#228B22;"><br>

        	<h1 align="center"><b><font style="font-family: 'Libre Baskerville', serif;text-shadow:3px 3px #000;">Lecturer Login Page</font></b></h1>
          <img src="image/clipart/login-user-icon.png" class="img-circle" alt="Bird" width="130" height="120">
          <?php    $error= "<h4 style='color:red'>Invalid login details</h4>"; 
		  echo @$error;
		  ?>
		  
		  
  <form method = "POST" action = "process/processes2.php" autocomplete = "off" accept-charset="UTF-8">
		  <br>
              <div class="form-group">
               	<input placeholder="Enter your Email" class="form-control form-control-md" name="eid" type="text" id="username" required autofocus />
              </div>
            <div class="form-group">
             <input placeholder="Enter your Password" class="form-control form-control-md" name="pWord" type="password" id="password" required />
            </div>
          <input type="submit" value="Login" name="sign_in2" class="btn btn-primary btn-group btn-group-justified"required>
          <div class="form-group forget">
                <a href="Forgotaccountlecturer.php">Forgot Account</a>&nbsp; <b>|</b>&nbsp; 
                <a href="Registationform2.php">Create an Account</a>
            </div>
      	</form>
		
		<br>
        </div>
    </div><br>
  </div>
</div>
<?php
include('Footer.php')
?>
</body>
</html>