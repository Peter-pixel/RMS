<?php 
session_start();
error_reporting(1);
if($_SESSION['create_account_logged_in2']!="")
{
header('location:Booking Form.php');
}
error_reporting(1);
require('connection.php');
extract($_REQUEST);
if(isset($login))
{
 
 
 
 
 //on creating an account, a user enters a password!
//$passw="pwtester";//user keyed in password

$newhash = password_hash($passw, PASSWORD_DEFAULT);
//#newhash now has the only value that you need to store in the db
//you do not need any more than this value, that you retrieve when you 
//want to verify your password!

//this part is only done to verify passwords!
if (password_verify($passw, $newhash)) {
   // echo"verified";
   $_SESSION['create_account_logged_in2']=$eid; 
	 header('location:Booking Form.php'); 
}
else
{
    //echo"Not verified"; 
	$error= "<h4 style='color:red'>Invalid login details</h4>"; 
}
 
 
 
  
  
  if($eid=="" || $passw=="")
  {
  $error= "<h4 style='color:red'>fill all details</h4>";  
  }   
  else
  {
  $sql=mysqli_query($con,"select * from create_account2 where email='$eid' && password='$newhash' ");
    if(mysqli_num_rows($sql))
    {
		
		
		
		
    $_SESSION['create_account_logged_in2']=$eid;  
    header('location:Booking Form.php'); 
    }
    else
    {
    $error= "<h4 style='color:red'>Invalid login details</h4>"; 
    } 
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>RMS.Com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Akronim|Libre+Baskerville" rel="stylesheet">
</head>
<body style="margin-top:50px;">
<?php
include('MenuBarlecturer.php')
?>
<div class="container-fluid"><!-- Primary Id-->
  <div class="container">
    <div class="row"><br>
      <div class="col-sm-4"></div>
        <div class="col-sm-4 text-center"style="box-shadow:2px 2px 2px;background-color:#228B22;"><br>

        	<h1 align="center"><b><font style="font-family: 'Libre Baskerville', serif;text-shadow:3px 3px #000;">Lecturer Login Page</font></b></h1>
          <img src="image/clipart/login-user-icon.png" class="img-circle" alt="Bird" width="130" height="120">
          <?php echo @$error; ?>
          <form method="post"><br>
              <div class="form-group">
                <input type="Email" class="form-control"name="eid"placeholder="Email Id" autocomplete="off"required >
              </div>
	
			
			 <div class="form-group">
                <input type="Password" class="form-control"name="passw"placeholder="Password" autocomplete="off"required>
            </div>
			
			
          <input type="submit" value="Login" name="login" class="btn btn-primary btn-group btn-group-justified"required>
          <div class="form-group forget">
                <a href="Forgotaccountlecturer.php">Forgot Account</a>&nbsp; <b>|</b>&nbsp; 
                <a href="Registationform2.php">Create an Account</a>
            </div>
      	</form><br>
        </div>
    </div><br>
  </div>
</div>
<?php
include('Footer.php')
?>
</body>
</html>
