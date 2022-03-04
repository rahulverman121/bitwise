<?php

//importing database connection file
include('connection.php');

//Taking data from user input
$addr1 = $_POST['addr1'];
$addr2 = $_POST['addr2'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$pincode = $_POST['pincode'];
$usrid = $_POST['usrid'];
//SQL Query
$query = "insert into address(firstline,secondline,city,state,country,pincode,usrid) values('$addr1','addr2','$city','$state','$country','$pincode','$usrid')" ;

//Executing SQL query and checking if data inserted succefully or not
if(mysqli_query($con,$query))
	echo "Details Updated Successfully";
else
	echo "Encountered error while Updation". mysqli_error($con);

?>