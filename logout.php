<?php
session_start();
//clear session data and close session
unset($_SESSION['userid']);
header("location:index.php");
?>