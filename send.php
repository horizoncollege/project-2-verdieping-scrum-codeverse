<?php

$name = $_POST['firstname'];
$lastname = $_POST['surname'];
$email = $_POST['email'];
$message = $_POST['message'];

include('config.php');

$sql = "INSERT INTO contact (firstname, lastname, email, message) VALUES (:firstname, :lastname, :email, :message)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":firstname", $name);
$stmt->bindParam(":lastname", $lastname);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":message", $message);
$stmt->execute();

$conn = null;

header("location:contact.php");

?>
