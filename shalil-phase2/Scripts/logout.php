<?php
//Start session
session_start(); 

//Unset the variables stored in the session
$_SESSION = array();

//Destroy the session
session_destroy();

//Redirect to the login page
header("Location: ../Web-pages/index.php");
exit;
?>
