<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>CodeVerse details</title>
</head>

<body>
    <?php include('nav.php'); include('config.php'); 
    $id = $_GET['id'];
    $sql = "SELECT * FROM code WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch();
    
    ?>
 <!--the datails of the repository's-->
    <div class="maincontainer">
        <h3><?php echo $result['repository'];?></h3>
        <p class="detailinh">Made by: <?php echo $result['author'];?></p>
        <p class="detailinh">Tags: <?php echo $result['tags'];?></p>
        <p class="detailinh">Last version: <?php echo $result['date'];?></p>
        <p class="detailinh">Licence: <?php echo $result['licence'];?></p>
        <p class="detailinh">Code:</p>
        <textarea disabled class="codefield"><?php echo $result['code'];?></textarea>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>

