<?php 
include('connection.php');
extract($_REQUEST);
if(isset($send))
{
mysqli_query($con,"insert into feedback values('','$n','$e','$mob','$msg')");	
$msg= "<h4 style='color:green;'>feedback sent successfully</h4>";
}
?>
<!-- Footer1 Start Here-->

<footer style="background-color: #393939;">
    <div class="">
	  <h3 style="color:#cdd51f;">Contact Us</h3>
	    <p style="color:white;"><strong>Email-Id:&nbsp;</strong>rms@gmail.com</p>
		    <p class="text-justify">Room Management System</p><br>
	<div class="col-sm-4 hov">
		<img src="logo/rms.png"width="200px"height="50px"/><br><br>

	
    <!--  <center><a href="about.php" class="btn btn-danger"><b>Read More..</b></a></center><br><br><br>
  <p style="color:white;"><strong>Contact Us:&nbsp;</strong>070000000</p><br><br><br>
 -->
 <?php
  include('Social ican.php')
?>

	</div>&nbsp;&nbsp;
	<div class="col-sm-4 text-justify">
	     
   <!--   <p style="color:white;"><strong>Address:&nbsp;</strong>Sector,59 Mamura Chowk,Noida</p> -->
    
     
     <center><img src="image/devlop/img2.png"class="img-responsive"style="width:100px;height:70px;border-radius:100%;"></center>
	</div>&nbsp;

  <!--Feedback Start Here-->
<!--	<div class="col-sm-4 text-center">
      <div class="panel panel-primary">
        <div class="panel-heading">Feedback</div>
          <div class="panel-body">
            <?php echo @$msg; ?>
     

  </div>
</footer>
<!--Footer1 Close Here-->

<!--Footer2 start Here-->

<footer class="container-fluid text-center"style="background-color:#000408;height:40px;padding-top:10px;color:#f0f0f0;">
  <p></p>
</footer>

<!--Footer2 start Here-->