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
    <!--here is linked to the nav.php so you can see the navbar -->
    <?php include('nav.php'); ?>
    <h2>edit</h2>
    <!--input in the main container -->
    <div class="maincontainer">
        <h3>repository name:</h3>
        <p class="detailinh">date of upload/last update:</p>
        <p class="detailinh">languages and license:</p>
        <p class="detailinh">author:</p>
        <p class="detailinh">tags:</p>
        <h3>code:</h3>
        <div class="edit-code-input">
            <textarea class="detailcode" rows="20" type="text"></textarea>
        </div>
        <button>submit</button>
    </div>
    <!--here is linked to the footer.php so you can see the footer -->
    <?php include('footer.php'); ?>
</body>

</html>