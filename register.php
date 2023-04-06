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
            <!--the form to register an account-->
            <div class="login">
            <form action="index.php" method="post">
                
                <input type="text" name="username" placeholder="username" required>
                <br>
                <input type="password" name="password" placeholder="password" required>
                <br>
                <input type="email" name="password" placeholder="e-mail" required>
                <button class="button-name">register</button>
            </form>
            <div class="login-register-member">
                <a class="register-a" href="login.php">already a member? login</a>
            </div>
            </div>
    </div>
</body>

</html>