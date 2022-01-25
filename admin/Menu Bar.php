<?php session_start();
error_reporting(1);
?>
<!--Menu Bar Close Here-->


<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img  href="index.php" src="logo/rms.png"/width="160px"height="40px"style="margin-top:5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../index.php"title="Home">Home</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../index.php"title="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;User Login</a>
        </li>
        <li><a href="index.php"title="Admin Login"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin Login</a></li>

   <?php 
      if($_SESSION['create_account_logged_in']!="")
      {
        ?>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View Status <span class="caret"></span></a>
        	<ul class="dropdown-menu">
          		<li><a href="profile.php">Profile</a></li>
              <li><a href="order.php">Booking Status</a></li>
              <li><a href="logout.php">Logout</a></li>
        	</ul>
        </li>
        <?PHP } ?>
      </ul>
    </div>
  </div>
</nav>   

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>


<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="index.php">Room Management System</a>
</div>

<div  align="center" style="padding-left:16px">
  <h1 class="serif" style > <font color="#000000;"  align="center" >Room Management System</font></h1><br>
</div>



<!--Menu Bar Close Here-->
