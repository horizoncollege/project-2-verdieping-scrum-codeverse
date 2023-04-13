<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="images/icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>CodeVerse</title>
</head>

<body>
    <!--inculdes the navbar and the config-->
    <?php

    session_start();
    include('nav.php');
    include('config.php');
    if (!isset($_SESSION['username'])) {
        header("location:login.php");
    }

    $sql = "SELECT * FROM code WHERE public = 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $id = "";
    $name = "";
    $author = "";
    $date = "";
    $tags = "";
    $license = "";

    if (isset($_post['search'])) {
        $name = $_post['id'];

        $pdoquery = "SELECT * FROM code WHERE name = :id ";
        $pdoquery_run = $conn->prepare($pdoquery);
        $pdoquery_exec = $pdoquery_run->execute(array(":id" =>'id'));

        if ($pdoquery_exec) {
            if ($pdoquery_run->rowCount() > 0) {
                foreach ($pdoquery_run as $row) {
                    $id = $row->id;
                    $name = $row->repository;
                    $author = $row->author;
                    $date = $row->date;
                    $tags = $row->tags;
                    $license = $row->license;
                }
            } else {
                echo ' <script> alert("repository could not be found") </script> ';
            }
        } else {
            echo ' <script> alert("repository could not be found") </script> ';
        }
    }

    ?>
    <div class="maincontainer">
        <div class="search">
            <form>
                <input type="text" placeholder=" Search...." name="search">
                <button type="submit">search</button>
            </form>
        </div>
        <!--the repositories-->
        <?php
        foreach ($stmt as $nog) {
            echo "<div class='rows'>";
            echo "<a id='detailbutton' href='detail.php?id=" . $id . $nog['id'] . "'><div class='codebox'>";

            echo "<p>Repository name: " . $name . $nog['repository'] . "</p>";
            echo "<p>Author: " . $author . $nog['author'] . "</p>";
            echo "<p>" . $date . $nog['date'] . " " . $tags . $nog['tags'] . " " . $license . $nog['licence'] . "</p>";
            echo "</a></div>";
            echo "</div>";
        }
        ?>

    </div>
    <?php include('footer.php'); ?>
</body>

</html>