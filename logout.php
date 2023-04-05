<?php
// on this page we make it so if you press the logout button you wil get send back to the login page an have to login again 
session_start();
session_destroy();
header('location: login.php');
die();
?>
