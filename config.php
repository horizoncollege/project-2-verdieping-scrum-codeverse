<?php
$servername = "localhost";
$username = "bit_academy";
$password = "bit_academy";
$dbname = "codeverse";


$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>