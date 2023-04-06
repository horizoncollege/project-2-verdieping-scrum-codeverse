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
    <?php include('nav.php'); 
    $servername = "localhost";
    $username = "bit_academy";
    $password = "bit_academy";
    $dbname = "codeverse";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $sql = "SELECT * FROM code";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    ?>
    <div class="maincontainer">
        <p class="search">search bar<input type="search"></p>

        <?php
        foreach ($stmt as $nog) {
        echo "<div class='rows'>";
        echo "<a href='detail.php?id=" . $nog['id'] . "'><div class='codebox'>";

        echo "<p>Repository name: " . $nog['repository'] . "</p>";
        echo "<p>Author: " . $nog['author'] . "</p>";
        echo "<p>" . $nog['date'] . " " . $nog['tags'] . " " . $nog['licence'] . "</p>";
        echo "</div>";
        echo "</div>";
        }
        ?>

    </div>
    <?php include('footer.php'); ?>
</body>

</html>