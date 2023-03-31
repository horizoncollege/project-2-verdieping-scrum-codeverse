<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <title>CodeVerse</title>
</head>

<body>
    <?php include('nav.php'); ?>
    <h2>detail</h2>

    <div class="maincontainer">
        <h3>repository name:</h3>
        <p class="detailinh">date of upload/last update:</p>
        <p class="detailinh">languages and license:</p>
        <p class="detailinh">author:</p>
        <p class="detailinh">tags:</p>
        <h3>code:</h3>
        <div class="edit-code-input">
            <textarea class="detailcode" rows="20" type="text" readonly></textarea>
        </div>
        <?php include('footer.php'); ?>
</body>

</html>

<style>
    body {
        background-image: url('images/codebackground.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    nav {
    background-color: gray;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    position: sticky;
    background-color: #2F80ED;
}
</style>