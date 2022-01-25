<?php 
include('../connection.php');

//$id=$_GET['id'];

$sql=mysqli_query($con,"TRUNCATE TABLE rooms ");
$res=mysqli_fetch_assoc($sql);

//$img=$res['image'];

//unlink("../image/rooms/$img");

if(mysqli_query($con,"TRUNCATE TABLE rooms "))
{
header('location:dashboard.php?option=rooms');	
}

?>