<?php

//Start new session
    session_start();  

//importing db connection.php   
    include('connection.php');
    $email = $_POST['email'];  
    $password = $_POST['password'];
    $encryptedpass = md5($password);
      
        //to prevent from mysqli injection  
        $username = stripcslashes($email); 
        $username = mysqli_real_escape_string($con, $email);    
      
//Query SQL database
        $sql = "select * from user where email = '$email' and password = '$encryptedpass' ";  
        $result = mysqli_query($con,$sql);
        $count = mysqli_num_rows($result);
          
        if($count != 0) {
$row = mysqli_fetch_assoc($result);
            $_SESSION["userid"] = $row['user_id'];
        	}  
        else{ 
            echo "<h1> Login failed. Invalid username or password.</h1>".$encryptedpass;
        }
    if(isset($_SESSION["userid"])) {
	header("Location:home.php");
    }
?>