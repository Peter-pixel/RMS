<?php 
session_start();
$_SESSION['create_account_logged_in2']=$eid;  
header('location:Login2.php'); 
?>