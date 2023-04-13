<?php

include("config.php");

$id = $_POST['ident'];

$sql = "UPDATE code SET repository = :repository, date = :date, language = :language, 
tags = :tags, licence = :licence, public = :public, code = :code WHERE id = $id";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':repository', $_POST['repository']);
$stmt->bindParam(':date', $_POST['date']);
$stmt->bindParam(':language', $_POST['language']);
$stmt->bindParam(':tags', $_POST['tags']);
$stmt->bindParam(':licence', $_POST['licence']);
$stmt->bindParam(':public', $_POST['public']);
$stmt->bindParam(':code', $_POST['code']);

$stmt->execute();

$conn = null;

header("location:mycode.php");

?>