<?php
    //connect de databse
    $servername = "localhost";
    $username = "bit_academy";
    $password = "bit_academy";
    $dbname = "codeverse";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

?>