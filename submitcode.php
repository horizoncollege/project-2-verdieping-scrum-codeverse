<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <title>CodeVerse</title>
</head>

<body>
    <?php include('nav.php'); ?>
    <h2>submit code</h2>

    <div class="submitcontainer">
        <div class="codeinfo">
        <h3>repository name: <textarea name="name" id="name" cols="30" rows="1"></textarea></h3>
        <p class="detailinh">date of upload/last update:</p>
        <p class="detailinh">languages and license:</p>
        <p class="detailinh">author:</p>
        <p class="detailinh">tags:</p>
        <h3>code:</h3></div>
        <div class="edit-code-input">
            <textarea class="detailcode" rows="20" type="text"></textarea>
        </div>
        <div class="submitbutton"></div>
        <button>submit</button>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>
