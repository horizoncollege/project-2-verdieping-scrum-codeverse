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
    <?php include('nav.php'); ?>
    <div class="submitcontainer">
        <!--put in the name and tags of the repository-->
        <div class="codeinfo">
        <h3>repository name: <input type="text"></h3>
        <p class="detailinh">date of upload/last update:</p>
        <p class="detailinh">languages and license:</p>
        <p class="detailinh">author:</p>
        <p class="detailinh">tags:</p>
        <h3>code:</h3></div>
        <!--the textarea to put your code in-->
        <div class="edit-code-input">
            <textarea class="detailcode" rows="20" type="text"></textarea>
        </div>
        <div class="submitbutton"></div>
        <button>submit</button>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>
