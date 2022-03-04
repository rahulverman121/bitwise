<?php

//import db connection
include ('connection.php');

//Receive response from user via post method and store it in PHP variable
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$dob = $_POST['dob'] ;
$phone = $_POST['mobile'];
$pass = $_POST['password'];

//Password Encrption
$encryptedpass = md5($pass);
$avatar = $_POST['avatar'];
$description = $_POST['description'];

//Query database
$query = "Select * from user where email = '$email' ";
$data = mysqli_query($con,$query);
$count = mysqli_num_rows($data);

//Match mail with existing data
if($count) {
	echo "User Already Exist!";
}
else {
//Insertion into database
$sqlquery = "insert into user(fname,lname,email,dob,phone,password,avatar,description) values('$fname','$lname','$email','$dob','$phone','$encryptedpass','$avatar','$description') ";
if(mysqli_query($con,$sqlquery))
header('Location:index.php#login');

else 
echo "Encountered error while registration!". mysqli_error($con);
}
?>