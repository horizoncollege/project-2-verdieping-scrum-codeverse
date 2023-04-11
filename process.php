<?php

session_start();
include('config.php');
        //posts the repository
$data = [
        'repository' => $_POST['repository'] , 
        'date' => $_POST['date'] ,
        'language' => $_POST['language'] ,
        'tags' => $_POST['tags'] ,
        'licence' => $_POST['licence'] ,
        'code' => $_POST['code'] ,
        'public' => $_POST['public']
    ];

    $sql = "INSERT INTO code (repository, author, `date`, `language`, tags, licence, code, public) 
    VALUES (:repository, :author, :date, :language, :tags, :licence, :code, :public)";
    $film = $conn->prepare($sql);

    $film->bindParam(':repository', $data['repository']);
    $film->bindParam(':author', $_SESSION['username']);
    $film->bindParam(':date', $data['date']);
    $film->bindParam(':language', $data['language']);
    $film->bindParam(':tags', $data['tags']);
    $film->bindParam(':licence', $data['licence']);
    $film->bindParam(':code', $data['code']);
    $film->bindParam(':public', $data['public']);

    $film->execute();

    $conn = null;

    header("location:mycode.php");

    ?>