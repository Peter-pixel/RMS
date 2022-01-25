<?php 
session_start();
error_reporting(1);
include('connection.php');
?>



<head>
  <title>RMS.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style22.css">

  
  <script src="js/js1.js"></script>
  <script src="js/js2.js"></script>
  <link href="font/font1.css" rel="stylesheet">
  <link href="css/style11.css"rel="stylesheet"/>
</head> 



</style>






<body background="" style="margin-top:50px;" style="background-size: 900px 100px;">
  <?php
      include('Menu Bar.php')
  ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  
	
	

    
</div> 

 <div class="container-fluid"id="">
<div class="container text-center">   


</head>
<body>



 
  <div class="row">
    <div class="hov">
	

<div class="btn-groupd" style="width:100%">

	  <button class="btn-groupd" "title="Student" style="width:50%"><a href="Login.php"title=""><H2 > <font color="#"> Student  </font></H2></a></button>
	





<div class="btn-groupf" style="width:100%">
  <button class="btn-groupf" "title="Lecturer" style="width:50%"><a href="Login2.php"title=""><H2> <font color="#fff;"> Lecturer  </font> </H2></a></button>

</div>
<br></br>
<br></br>
<br></br>
<br></br>
    
	
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