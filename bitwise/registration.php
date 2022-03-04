<?php
include ('connection.php');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$dob = $_POST['dob'] ;
$phone = $_POST['mobile'];
$pass = $_POST['password'];
$encryptedpass = md5($pass);
$avatar = $_POST['avatar'];
$description = $_POST['description'];

$query = "Select * from user where email = '$email' ";
$data = mysqli_query($con,$query);
$count = mysqli_num_rows($data);
if($count) {
	echo "User Already Exist!";
}
else {
$sqlquery = "insert into user(fname,lname,email,dob,phone,password,avatar,description) values('$fname','$lname','$email','$dob','$phone','$encryptedpass','$avatar','$description') ";
if(mysqli_query($con,$sqlquery))
echo "Successfully registered!";
else 
echo "Encountered error while registration!". mysqli_error($con);
}
?>