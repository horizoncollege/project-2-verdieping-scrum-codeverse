<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>CodeVerse</title>
</head>

<body>
    <div class="logincontainer">
        <img class="logo" src="images/logo.png">
        <br>
        <div class="login">
            <form method="post">
                <label>Username:</label>
                <input type="text" name="username" required><br><br>
                <label>Password:</label>
                <input type="password" name="password" required><br><br>
                <input class="button-name" type="submit" value="Login">
            </form>
            <div class="login-register-member">
                <a class="register-a" href="register.php">not yet a member? register</a>
            </div>
        </div>
    </div>




    <?php
    session_start();
    include("config.php");
    echo "<div class='container'>";

    $stmt = $conn->prepare("SELECT username, wachtwoord FROM gebruikers");
    $stmt->execute();
    $row = $stmt->fetch();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == $row['username'] && $password == $row['wachtwoord']) {
            $_SESSION['username'] = $username;
            $_SESSION['loggedInUser'] = $row['username'];

            header('Location: index.php');
            exit;
        } 
    }
    ?>



</body>

</html>