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
        <h1 class="login-h1">login</h1>
            <!--the form for the login data-->
            <form method="post">
                <div class="login-user-pass">
                    <label>Username:</label>
                    <input type="text" name="username" required><br><br>
                </div>
                <br>
                <div class="login-user-pass">
                    <label>Password:</label>
                    <input type="password" name="password" required><br><br>
                </div>
                <input class="button-name" type="submit" value="Login">

                <?php
                //starts the session when logged in
                session_start();
                if (isset($_POST['username']) && isset($_POST['password'])) {
                    include('config.php');
                    $user = $_POST['username'];
                    $pass = $_POST['password'];
                    $sql = "SELECT * FROM users WHERE (nameuser = :username) AND (password = :password)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(":username", $user);
                    $stmt->bindParam(":password", $pass);
                    $stmt->execute();
                    $result = $stmt->fetch();

                    if ((is_array($result)) && ($user == $result['nameuser'])) {
                        $_SESSION['loggedInUser'] = $result['id'];
                        $_SESSION['username'] = $result['nameuser'];

                        header("Location: index.php");
                    } else {
                        $_SESSION['loggedInUser'] = "fout";
                        echo "password or username is wrong";
                    }
                }

                $conn = null;
                ?>
            </form>
            <div class="login-register-member">
                <a class="register-a" href="register.php">not yet a member? register</a>
            </div>
        </div>
    </div>


</body>

</html>