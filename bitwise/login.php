<?php
    session_start();     
    include('connection.php');
    $email = $_POST['email'];  
    $password = $_POST['password'];
    $encryptedpass = md5($pass);
      
        //to prevent from mysqli injection  
        $username = stripcslashes($email); 
        $username = mysqli_real_escape_string($con, $email);    
      
        $sql = "select * from user where username = '$username' and password = '$encryptedpass' ";  
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
          
        if($count != 0) {
            $_SESSION["fname"] = $row['fname'];
        	}  
        else{ 
            echo "<h1> Login failed. Invalid username or password.</h1>";
        }
    if(isset($_SESSION["fname"])) {
    header("Location:bitwise.php");
    }
?>