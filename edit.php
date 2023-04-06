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
<?php include('nav.php'); ?>
 <!--the datails of the repository's-->
    <div class="maincontainer">
        <h3>repository</h3>
        <p class="detailinh">Made by:</p>
        <p class="detailinh">Tags:</p>
        <p class="detailinh">Last version:</p>
        <p class="detailinh">Licence:</p>
        <p class="detailinh">Code:</p>
        <textarea disabled class="codefield"></textarea>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>
