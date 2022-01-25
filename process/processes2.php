<?php
	session_start(); 
	require_once "../includes/db_connect.php";
    //require('connection.php');
    
  
   $error= "<h4 style='color:red'>Invalid login details</h4>";   
  
   if (isset($_POST["sign_up2"])){  

   $error= "<h4 style='color:red'>Invalid login details</h4>";     

    //$fullName = mysqli_real_escape_string($conn, $_POST["fullName"]);
    $email_address = mysqli_real_escape_string($conn, $_POST["email_address"]);
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $mobi = mysqli_real_escape_string($conn, $_POST["mobi"]);
    $gend = mysqli_real_escape_string($conn, $_POST["gend"]);
   // $ConfPass = mysqli_real_escape_string($conn, $_POST["ConfPass"]);
    //$userRole = mysqli_real_escape_string($conn, $_POST["userRole"]);
    
	// Set the encryption cost 
    $rounds = array( "cost" => 7 );
    /*The default for the rounds variable has been set to 7 here. 7 is good enough in terms of security and the cost of processing the hash is also acceptable. But depending on your system you might want to use a higher value. As you increase this value the time taken to generate, test, or try to brute-force the hash will increase significantly - hard paper for the attacker. Of course your computer might take slightly longer to generated one password hash.	
	As computers get faster you will want to increase the cost (which is the number of rounds), and for high security applications you can: increase the rounds; use a more random salt generator; or generate a hash using multiple hashing mechanisms in sequence.*/
	
    $hash_pass = password_hash($password, PASSWORD_BCRYPT, $rounds);
    /*******************************************
	Can also use $hash_pass = password_hash($ConfPass, PASSWORD_DEFAULT); this will let PHP use it's default settings (at time of writing, also bcrypt with a cost of 10):
    https://www.the-art-of-web.com/php/blowfish-crypt/
	*******************************************/
    
    $user_insert = "INSERT INTO create_account2 (name, email, password, mobile,gender) VALUES ('$username', '$email_address','$hash_pass','$mobi','$gend')";
    
    if($conn->query($user_insert) === TRUE){
         header('location:../Login2.php'); 
        exit();
		$msg= "<h1 style='color:green'>Data Saved Successfully</h1>"; 
        //print "Record stored successfully";
    }else{
        print "Failed: " . $conn->error;
    }
    
    }    
	
	
//session_start();
error_reporting(1);
if($_SESSION['create_account_logged_in2']!="")
{
header('location:bookingform.php');
}
error_reporting(1);
require('connection.php');
extract($_REQUEST);
   if (isset($_POST["sign_in2"])){   
   $error= "<h4 style='color:red'>Invalid login details</h4>"; 
   
    //In this particular sign in process we need to verify a userName and password.
    $username_entered = mysqli_real_escape_string($conn, $_POST["eid"]);
    $password_entered = mysqli_real_escape_string($conn, $_POST["pWord"]);
    
    //The  query below will look a matching userName from the users' tables. "LIMIT 1" means we just need to pick ONLY ONE row. Select all (*) records matching the condition in the WHERE close but pick only the first matching record.
    $spot_username = "SELECT * FROM create_account2 WHERE email = '$username_entered' LIMIT 1";
	    
    /*****
    After database connection using new mysqli method, database connection object is returned. A query ($spot_username) is passed to connection object's query method. This function returns a result set. Here we call it user results or $user_res
    *****/    
    $user_res = $conn->query($spot_username);
	
    if ($user_res->num_rows > 0){ //Verifying if at least one row (num_rows or in other words number_of_rows is greater than (>) zero ) was found as a result of the select query above.
        
    /*************************************************************************
Likewise procedural way a row from result set is fetched using fetch_assoc() method.
This method returns a single row of result that we store in a session declared as $_SESSION["control"]. Column names are used as array indexes to access result like a password we do $_SESSION["control"]["password"] or a userId we do $_SESSION["control"]["userId"].
    *************************************************************************/
    
        $_SESSION["control"] = $user_res->fetch_assoc();
		
		$password_stored = $_SESSION["control"]["password"];
//For comparing the user entered password with the stored hash there is also a new function:
			if(password_verify($password_entered, $password_stored)){
/*
The password_verify function is designed to mitigate timing attacks and will work with other hash formats, not just Blowfish. It replaces the method above of having to apply crypt to the entered password ourselves for verification.
*/
  $_SESSION['create_account_logged_in2']=$eid;  
					header('location:../bookingform.php');
				}else{
					
					header("Location: ../Login2.php");
					exit();
					
				}
	}else{
		 $error= "<h4 style='color:red'>Invalid login details</h4>"; 
        header("Location: ../Login2.php");
		      echo @$error;
		exit();
    }
    
    }
    

  
?>