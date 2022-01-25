
<?php 
include('menubarlecturer.php');
include('connection.php');
$eid=$_SESSION['create_account_logged_in2'];

if($eid=="")
{
header('location:Login2.php');
}
$sql= mysqli_query($con,"select * from room_booking_details where email='$eid' "); 

$result=mysqli_fetch_assoc($sql);
//print_r($result);
  echo @$msg; 
extract($_REQUEST);
error_reporting(1);
if(isset($savedata))
{
  $sql= mysqli_query($con,"select * from room_booking_details where email='$email' and room_type='$room_type' ");
  if(mysqli_num_rows($sql)) 
  {
  $msg= "<h1 style='color:red'>You have already booked this room</h1><a href='order.php'><h2>View Your Booked Rooms</h2></a>";    
  }
  else
  {

   $sql="insert into room_booking_details(name,email,phone,room_type,check_in_time) 
  values('$name','$email','$phone',
  '$room_type','$ctime')";
  
  
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:blue'>You have Successfully Requested for this room</h1><h2><a href='order.php'>View Your Booked Rooms</a></h2>"; 
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
 <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="margin-top:50px;">
  <?php
 // include('MenuBarlecturer.php');
  ?>
<div class="container-fluid text-center"id="primary"><!--Primary Id-->
  <h1>[ Vacant Rooms Today ]</h1><br>
  <div class="container">
    <div class="row">
	
	<?php 
	$sql= mysqli_query($con,"select * from create_account2 where email='$eid' "); 
$result=mysqli_fetch_assoc($sql);
//print_r($result);
extract($_REQUEST);
error_reporting(1);
	?>
	
     
      <!--Form Container Start Here-->
     <form class="form-horizontal" method="post">
       <div class="col-sm-6">
         <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4> Name :</h4></div>
                <div class="col-sm-8">
                 <input type="text" value="<?php echo $result['name']; ?>" readonly="readonly" class="form-control" name="name" placeholder="This is Your Frist Name"required>
          </div>
        </div>
      </div>

        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Email :</h4></div>
          <div class="col-sm-8">
              <input type="email" value="<?php echo $result['email']; ?>" readonly="readonly" class="form-control" name="email"  placeholder="This is Your Email Address"required/>
          </div>
        </div>
        </div>


        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Mobile :</h4></div>
          <div class="col-sm-8">
              <input type="number" value="<?php echo $result['mobile']; ?>" readonly="readonly" class="form-control" name="phone" placeholder="This is Your Phone Number"required> 
          </div>
        </div>
        </div>
		
		 <div class="form-group">
		 <button class="btn btn-success" name="Logout" ><a href="Logoutlecturer.php"title="logout">Logout</a></button> 
	
		
		   </div>

		
        </div>






	<?php 
	$sql2= mysqli_query($con,"select type from rooms where room_id='1' ");
	    $sql2a= mysqli_query($con,"select Status from rooms where room_id='1' ");
	$sql3= mysqli_query($con,"select type from rooms where room_id='2' ");
		$sql3a= mysqli_query($con,"select Status from rooms where room_id='2' ");
	$sql4= mysqli_query($con,"select type from rooms where room_id='3' ");
	$sql4a= mysqli_query($con,"select Status from rooms where room_id='3' ");
	$sql5= mysqli_query($con,"select type from rooms where room_id='4' ");
	$sql5a= mysqli_query($con,"select Status from rooms where room_id='4' ");
	$sql6= mysqli_query($con,"select type from rooms where room_id='5' ");
	$sql6a= mysqli_query($con,"select Status from rooms where room_id='5' ");
	$sql7= mysqli_query($con,"select type from rooms where room_id='6' ");
	$sql7a= mysqli_query($con,"select Status from rooms where room_id='6' ");
$result2=mysqli_fetch_assoc($sql2);
$result2a=mysqli_fetch_assoc($sql2a);
$result3=mysqli_fetch_assoc($sql3);
$result3a=mysqli_fetch_assoc($sql3a);
$result4=mysqli_fetch_assoc($sql4);
$result4a=mysqli_fetch_assoc($sql4a);
$result5=mysqli_fetch_assoc($sql5);
$result5a=mysqli_fetch_assoc($sql5a);
$result6=mysqli_fetch_assoc($sql6);
$result6a=mysqli_fetch_assoc($sql6a);
$result7=mysqli_fetch_assoc($sql7);
$result7a=mysqli_fetch_assoc($sql7a);
//print_r($result);
extract($_REQUEST);
//error_reporting(1);
	?>
      <?php echo @$msg; ?>
      <!--Form Container Start Here-->
   
      
           <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5"><h4>Available Rooms Today:</h4></div>
                  <div class="col-sm-7">
                <select class="form-control" name="room_type"required>
                  <option><?php echo $result2['type'];  echo $result2a['Status'];  ?></option>
                  <option><?php echo $result3['type']; ?></option>
                  <option><?php echo $result4['type']; ?></option>
                  <option><?php echo $result5['type']; ?></option>
                  <option><?php echo $result6['type']; ?></option>
                  <option><?php echo $result7['type']; ?></option>
            
               </select>
              </div>
              </div>
            </div>
          </div>


     <!--     <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5"><h4>check In Date :</h4></div>
                  <div class="col-sm-7">
                  <input type="date" name="cdate" class="form-control"required>
                  </div>
              </div>
            </div>
          </div> -->

          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                 <div class="control-label col-sm-5"><h4>Check In Time:</h4></div>
                   <div class="col-sm-7">
                    <input type="time" name="ctime" class="form-control"required>
                  </div>
              </div>
            </div>
          </div>
		  
		  
		  
     <!--      <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5"><h4>Check Out Date :</h4></div>
                <div class="col-sm-7">
                  <input type="date" name="codate" class="form-control"required>
                </div> 
              </div>
            </div>
          </div>
		   -->
<!--
		      <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                 <div class="control-label col-sm-5"><h4>Check Out Time:</h4></div>
                   <div class="col-sm-7">
                    <input type="time" name="ctime" class="form-control"required>
                  </div>
              </div>
            </div>
          </div>
		  -->
		  
          <div class="col-sm-6">
            <div class="form-group">
          <!--  <div class="row">
                <label class="control-label col-sm-5"><h4 id="top">Status </h4></label>
                <div class="col-sm-7">
                  <div class="radio-inline"><input type="radio" value="Urgent" name="Status"required >Urgent</div>
                  
                  <div class="radio-inline"><input type="radio" value="Not Urgent" name="Status" required>Not Urgent</div>
                </div> 
              </div>-->
			  
            </div>
            <input type="submit"value="Request" name="savedata" class="btn btn-danger"required/>
          </div>  
		  
          </form><br>
        </div>
      </div>
    </div>
  </div>
<?php
include('Footer.php')
?>
</body>
</html>