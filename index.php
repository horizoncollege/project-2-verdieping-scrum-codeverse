<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>CodeVerse</title>
</head>

<body>
<?php

function dbconnect(){
    $servername = "localhost";
    $username = "bit_academy";
    $password = "bit_academy";
    $dbname = "codeverse";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

    $conn = dbconnect();
    $stmt = $conn->prepare("SELECT * FROM code");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();



    foreach($result as $value){
        if("Tim Abbing" == $value['author']){
            echo "correct";
        } else {
            echo "incorrect";
        }
    }


    
    ?>
?>






    <?php include('nav.php'); ?>

    <div class="maincontainer">
        <p class="search">search bar<input type="search"></p>

        <div class="rows">
            <div class="codebox">
                <?php
                  
                    $stmt->execute();
                    while ($row = $stmt->fetch()) {
                        echo "<tr><td>" . $row['repositoryname'] . "</td>
                    <td>" . $row['author'] . "</td>
                    <td>" . $row['tags'] . "</td>
                    <td>" . $row['lastupdate'] . "</td>
                    <td>" . $row['language'] . "</td>
                    <td>" . $row['licence'] . "</td>";
                    }

                    
                ?>
            </div>

            <div class="codebox">
                <p>Repository name:</p>
                <p>Author Tags</p>
                <p>Date of upload/Last Update, language, licence</p>
            </div>

            <div class="codebox">
                <p>Repository name:</p>
                <p>Author Tags</p>
                <p>Date of upload/Last Update, language, licence</p>
            </div>
        </div>

    </div>
    <?php include('footer.php'); ?>
</body>

</html>