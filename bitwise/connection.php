<?php
$host = "localhost:3302";
$user = "root";
$pass = "";
$database = "bitwise_db";

$con = mysqli_connect($host,$user,$pass,$database) ;
if(!$con) {
	echo "<h2>Connection Failed</h2>";
}
?>