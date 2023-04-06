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
<?php session_start(); include('nav.php'); include('config.php'); if (!isset($_SESSION['username'])) {header("location:login.php");} ?>
 <!--the datails of the repository's-->
    <div class="maincontainer">
        <h1>add code</h1>
        <form method="POST" action="process.php">
        <input class="detailinh" type="text" required name="repository" placeholder="repository">
        <input class="detailinh" type="date" required name="date">
        <input class="detailinh" type="text" required name="language" placeholder="programming language">
        <input class="detailinh" type="text" required name="tags" placeholder="tags">
        <input class="detailinh" required type="text" name="licence" placeholder="licence">
        <select required name="public">
            <option value="1">public</option>
            <option value="0">private</option>
        </select>
        <textarea class="codefield" required rows="5" cols="50" name="code"></textarea>
        <button type="submit" value="submit">Submit</button>
        </form>
    </div>

</body>
</html>