
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
  include('menubarstudent.php');
  ?>
<div class="container-fluid text-center"id="primary"><!--Primary Id-->
  <h1>[ Your Details ]</h1><br>
  <div class="container">
    <div class="row">
	
	
	
		<?php 
include('menubarstudent.php');
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];




if($eid=="")
{
header('location:Login.php');
}
$sql= mysqli_query($con,"select * from create_account where email='$eid' "); 
$result=mysqli_fetch_assoc($sql);
//print_r($result);
extract($_REQUEST);
error_reporting(1);
if(isset($savedata))
{
  $sql= mysqli_query($con,"select * from create_account where email='$email' and room_type='$room_type' ");
  if(mysqli_num_rows($sql)) 
  {
  $msg= "<h1 style='color:red'>You have already booked this room</h1>";    
  }
  else
  {

   $sql="insert into room_booking_details(name,email,phone,state,room_type,Occupancy,check_in_date,check_in_time) 
  values('$name','$email','$phone','$state',
  '$room_type','$Occupancy','$cdate','$ctime')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:blue'>You have Successfully Requested for this room</h1><h2><a href='order.php'>View </a></h2>"; 
   }
  }
}
?>
	
      <?php echo @$msg; ?>
      <!--Form Containe Start Here-->
     <form class="form-horizontal" method="post">
       <div class="col-sm-6">
         <div class="form-group">
           <div class="row">
		   <br>
              <div class="control-label col-sm-4"><h4> Name :</h4></div>
                <div class="col-sm-8">
                 <input type="text" value="<?php echo $result['name']; ?>" readonly="readonly" class="form-control" name="name" placeholder="Your Frist Name"required>
          </div>
        </div>
      </div>

        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Email :</h4></div>
          <div class="col-sm-8">
              <input type="email" value="<?php echo $result['email']; ?>" readonly="readonly" class="form-control" name="email"  placeholder="Your Email Address"required/>
          </div>
        </div>
		   <div class="btn btn-primary btn-group btn-group-justified">
                <a href="profile.php"><h4><font color="white">Edit Your Account Details</font></h4></a>
				
            </div>
			
        </div>
 <div class="btn btn-primary btn-group btn-group-justified">
                <a href="logout.php"><h4><font color="white">Logout</font></h4></a>
				
            </div>
<!--
        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Mobile :</h4></div>
          <div class="col-sm-8">
              <input type="number" value="
			  <?php 
//			  echo $result['mobile']; ?>" readonly="readonly" class="form-control" name="phone" placeholder="Type Your Phone Number"required>
          </div>
        </div>
        </div>

        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Address :</h4></div>
          <div class="col-sm-8">
              <textarea name="address" class="form-control" readonly="readonly" placeholder="Enter Your Address"><?php
//			  echo $result['address'];  ?></textarea>
          </div>
        </div>
        </div>

         <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Country</h4></div>
          <div class="col-sm-8">
              <input type="text" class="form-control" readonly="readonly"  value="<?
			  //php echo $result['country']; ?>" name="city" placeholder="Enter Your City Name"required>
          </div>
        </div>
        </div>
 -->
       

		  
        </div>

         
           
                <div class="col-sm-4">
				<br>
             
			   
			   
			   
			   
			   
			   
			   
			   
                 
         <!--       <ul style="text-align:left;">
                  <li> <h3> Room 12 Phase 1 (1500-1800) </h3> </li>
                  <li><h3>Room 24 Phase 1 </h3> </li>
                  <li><h3>Kiambere Lab Phase 1 </h3> </li>
                  <li><h3>Aberdare Lab Phase 1 </h3> </li>
                  <li><h3>Room B Phase 1 </h3> </li>
                  <li><h3>STMB F1-04 Phase 2 </h3> </li>
               </ul>
             -->
             
          
        

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
<!--
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
		  -->
		  
		  
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
		          </div>
		
		  
		  
          <div class="col-sm-6">
            <div class="form-group">
           <!-- <div class="row">
                <label class="control-label col-sm-5"><h4 id="top">Status :</h4></label>
                <div class="col-sm-7">
                  <div class="radio-inline"><input type="radio" value="single" name="Occupancy"required >Urgent</div>
                  
                  <div class="radio-inline"><input type="radio" value="dubble" name="Occupancy" required>Not Urgent</div>
                </div> 
              </div>
			  -->
            </div>
         <!--   <input type="submit"value="Request" name="savedata" class="btn btn-danger"required/> -->
          </div>  
		  
          </form><br>
        </div>
      </div>
		  <h1>[ Vacant Rooms Today ]</h1><br>
	
		<?php 
include('menubarstudent.php');
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];




if($eid=="")
{
header('location:Login.php');
}
$sql= mysqli_query($con,"select * from room_booking_details where email='$eid' "); 
$result=mysqli_fetch_assoc($sql);
//print_r($result);
extract($_REQUEST);
error_reporting(1);
if(isset($savedata))
{
  $sql= mysqli_query($con,"select * from room_booking_details where email='$email' and room_type='$room_type' ");
  if(mysqli_num_rows($sql)) 
  {
  $msg= "<h1 style='color:red'>You have already booked this room</h1>";    
  }
  else
  {

   $sql="insert into room_booking_details(name,email,phone,state,room_type,Occupancy,check_in_date,check_in_time) 
  values('$name','$email','$phone','$state',
  '$room_type','$Occupancy','$cdate','$ctime')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:blue'>You have Successfully Requested for this room</h1><h2><a href='order.php'>View </a></h2>"; 
   }
  }
}
?>

<script>
	function delRoom(id)
	{
		if(confirm("You want to delete this Room ?"))
		{
		window.location.href='delete_room.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">


	<tr style="height:40">
		<!--<th>Room ID</th>-->
		<th>Room No</th>
		<th>Room Name</th>
		<th>Status</th>
		<th>Details</th>

	</tr>
<?php 
$i=1;
$sql=mysqli_query($con,"select * from rooms");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['room_id'];	
//$img=$res['image'];
//$path="../image/rooms/$img";
?>
<tr>
		<!--<td><?php //echo $i;$i++; ?></td>-->
		<!--<td><img src="<?php
		//echo $path;?>" width="50" height="50"/></td>-->
		<td><?php echo $res['room_no']; ?></td>
		<td><?php echo $res['type']; ?></td>
		<td><?php echo $res['Status']; ?></td>
		<td><?php echo $res['details']; ?></td>

		
	</tr>	
<?php 	
}
?>	
	
</table>

    </div>
	
  </div>
  
<?php
include('Footer.php')
?>
</body>
</html>
