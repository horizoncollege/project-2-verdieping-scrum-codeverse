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
<?php session_start(); include('nav.php'); include('config.php'); if (!isset($_SESSION['username'])) {header("location:login.php");}

$user = $_SESSION['username'];
$sql = "SELECT * FROM code WHERE author = '$user'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
?>
    <!--this box shows your own repsitory's-->
    <div class="maincontainer">
        <p class="search">search:<input type="search">
        <a href="submitcode.php"><input class="add-code-button" type="submit" value="Add code"></a></p>
        <?php
        foreach ($stmt as $nog) {
            echo "<div class='rows'>";
            echo "<a id='detailbutton' href='edit.php?id=" . $nog['id'] . "'><div class='codebox'>";
    
            echo "<p>Repository name: " . $nog['repository'] . "</p>";
            echo "<p>Author: " . $nog['author'] . "</p>";
            echo "<p>" . $nog['date'] . " " . $nog['tags'] . " " . $nog['licence'] . "</p>";
            echo "</a></div>";
            echo "</div>";
            }
            ?>
    </div>

    <?php include('footer.php'); ?>

</body>

</html>