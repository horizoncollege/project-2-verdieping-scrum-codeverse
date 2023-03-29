<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <title>CodeVerse</title>
</head>

<body>
    <?php include('nav.php'); ?>
    <h1 class="my-code-title">edit code</h1>
    <div class="edit-body">
        <div class="input-box">
            <div class="edit-code-text">
                <h2>repisotory name:</h2>
                <h4>date of upload/lastupdate:</h4>
                <h4>languages and license:</h4>
                <h4>author:</h4>
                <h4>tags:</h4>
            </div>
            <h2>code: </h2>
            <div class="edit-code-input">
                <textarea class="edit-code-input-text" rows="30" type="text"></textarea>
            </div>
            <div class="edit-submit-button">
            <input type="submit" value="submit">
            </div>
        </div>
    </div>
</body>

</html>