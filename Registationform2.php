
<?php
include('connection.php');
extract($_REQUEST);
if(isset($save))
{


  //$Passw = mysqli_real_escape_string($_POST["password"]);
  //changing below
  $Passw = mysqli_real_escape_string($_POST["password"]);
  
  //$Passwhash = password_hash($Passw, PASSWORD_BCRYPT);
  //also below
   $Passwhash = password_hash($Passw, PASSWORD_BCRYPT);
	
  $sql= mysqli_query($con,"select * from create_account2 where email='$email' ");
  if(mysqli_num_rows($sql))
  {
  $msg= "<h1 style='color:red'> account already exists</h1>";    
  }
  else
  {

      $sql="insert into create_account2(name,email,password,mobile,gender) values('$fname','$email','$Passwhash','$mobi','$gend')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:green'>Data Saved Successfully</h1>"; 
   header('location: ../Login2.php'); 
   }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>RMS.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
</head>
<body style="margin-top:50px;">
  <?php 
include('Menubarlecturer.php');
  ?>
  
  
  
  
  
  
  
  
  
    <div class="col-md-4">
     
			   <center><h1 style="background-color:#ed2553; border-radius:50px;display:inline-block;"><b><font color="#080808">Create New Account?</font></b></h1></center>
<form method = "POST" action = "process/processes2.php" autocomplete = "off" accept-charset="UTF-8">
 
    <div class="form-group">
		
	</div>
	 <div class="form-group">
		<label for="username">UserName</label>
		<input placeholder="Enter your UserName" class="form-control form-control-md" name="username" type="text" id="username" required />
	</div>
	
    <div class="form-group">
		<label for="email">Email Address</label>
		<input placeholder="Enter your email" class="form-control form-control-md" name="email_address" type="email" id="email" required />
	</div>
   
    <div class="form-group">
		<label for="password">Password</label>
		<input placeholder="Enter your Password" class="form-control form-control-md" name="password" type="password" id="password" required />
	</div>
    <div class="form-group">
            <div class="control-label col-sm-5"><h4>Mobile No:</h4></div>
          <div class="col-sm-7">
              <input type="text" name="mobi" class="form-control"placeholder="Enter Your Mobile Number"required>
          </div>
        </div>
		  <div class="form-group">
            <div class="control-label col-sm-5"><h4 id="top">Gender :</h4></div>
          <div class="col-sm-7">
              <input type="radio" name="gend"value="male"required><b>Male</b>&emsp;
              <input type="radio" name="gend"value="male"required><b>Female</b>&emsp;
          
          </div>
          </div>
    <div class="form-group">
		<input class="btn btn-primary" type="submit" name="sign_up2"  value="Sign Up">
	</div>
</form>
          </div>
  
  
  
  
  
  
  
  
  
  
  
<div class="container-fluid"style="background-color:#4286f4;color:#000;"> <!-- Primary Id-->
  <div class="container">
    <div class="row">
     
       <center><?php echo @$msg;?></center><br>
      <div class="col-sm-2"></div>
      <div class="col-sm-6 ">
        <form class="form-horizontal"method="post">
         

       

     


        <!--   <div class="form-group">
            <div class="control-label col-sm-5"><h4>Address :</h4></div>
          <div class="col-sm-7">
              <textarea  name="addr" class="form-control"required></textarea>
          </div>
        </div> -->

          

       <!--   <div class="form-group">
            <div class="control-label col-sm-5"><h4>Country :</h4></div>
          <div class="col-sm-7">
            <select name="countr" class="form-control"required>
              <option>India</option>
              <option>Pakistan</option>
              <option>China</option>
            </select>
        </div>
        </div> -->

        
        </form>
        </div>
      </div>
        <div class="col-sm-4">
        </div>
    </div>
  </div>
</div>
<?php
    include('Footer.php')
?>
</body>
</html>
