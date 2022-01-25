<?php 
session_start();
error_reporting(1);
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head><!--Head Open  Here-->
  <title>RMS.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style2.css">
  
  
  <script src="js/js1.js"></script>
  <script src="js/js2.js"></script>
  <link href="font/font1.css" rel="stylesheet">
  <link href="css/style.css"rel="stylesheet"/>
</head> <!--Head Open  Here-->
<body style="margin-top:50px;">
  <?php
      include('Menu Bar.php')
  ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel"> <!--Slider Image Start Here--> 
    <!-- Indicators -->
   <!-- <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
	   <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> -->
    <!--Indicators Close Here-->

    <!-- Wrapper for slides -->


<!--
    <div class="carousel-inner" role="listbox">
      // <?php
		// $i=1;
	  // $sql=mysqli_query($con,"select * from slider");
		// while($slider=mysqli_fetch_assoc($sql))
		// {
		// $slider_img=$slider['image'];
		// $slider_cap=$slider['caption'];
		// $path="image/Slider/$slider_img";	
			// if($i==1)
			// {	
		// ?>
	  <div class="item active">
        <img src="<?php echo $path; ?>" alt="Image">
        <div class="carousel-caption">
			<h2><?php echo $slider_cap; ?></h2>
		</div>      
      </div>
	<?php 
		// } 
		// else 
			// {
			 ?>	
		<div class="item">
        <img src="<?php echo $path; ?>" alt="Image">
        <div class="carousel-caption">
        <h2><?php echo $slider_cap; ?></h2>
		</div>      
      </div>	
				
		<?php
//		} ?>
	  
	  
		 <?php $i++; 
		 //} ?>
      
	  
    </div>

    
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a> 
    <!-- Left and right controls Close Here -->
    
</div> <!--Room Info Start Here-->

 <div class="container-fluid"id="red"><!--Id Is Red--> 
<div class="container text-center">    

 <h2>Student Home Page <h2/>
	<hr><br>
  <div class="row">
    <div class="hov"><!--Hov is Class-->
	<!--<h1>Lecturer ------------------------- Student</h1> -->


<div class="btn-groupp" style="width:100%">
  <!--<button style="width:50%"> Lecturer
     <a href="Login.php"title="Lecturer"></a> </button>-->
	 
	  <button class="btn-group" "title="Student" style="width:50%"><a href="Login.php"title=""><H2>Student  </H2></a></button> 
	  <button class="btn-group" "title="Student" style="width:50%"><a href="profile.php"title=""><H2>Student Details  </H2></a></button>
	    <button class="btn-group" "title="Student" style="width:100%"><a href="Logout.php"title=""><H2>Logout</H2></a></button> 
	
</div>




    
	
<!--	<?php 
	$sql=mysqli_query($con,"select * from rooms");
	while($r_res=mysqli_fetch_assoc($sql))
	{
	?>
	<div class="col-sm-4">
      <img src="image/rooms/<?php echo $r_res['image']; ?>"class="img-responsive thumbnail"alt="Image"id="img1"> <!--Id Is Img-->
 <!--     <h4 class="Room_Text">[ <?php echo $r_res['type']; ?>]</h4>
      <p class="text-justify"><?php echo substr($r_res['details'],0,100); ?></p><br>
	    <a href="room_details.php?room_id=<?php echo $r_res['room_id']; ?>" class="btn btn-danger text-center">Read more</a><br><br>
    </div>
	<?php } ?>
  </div>
  </div>
</div>
</div>


<?php
  include('Footer.php')
?>
</body>
</html>