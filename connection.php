<?php

//storing data in PHP variables
$host = "localhost:3302";
$user = "root";
$pass = "";
$database = "bitwise_db";

//connecting to sever
$con = mysqli_connect($host,$user,$pass,$database) ;
if(!$con) {
	echo "<h2>Connection Failed</h2>";
}
?>