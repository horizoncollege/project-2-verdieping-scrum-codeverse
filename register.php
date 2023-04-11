<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="images/icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>CodeVerse</title>
</head>

<body>
    <?php error_reporting(0);?>
    <div class="logincontainer">
        <img class="logo" src="images/logo.png">
        <br>
            <!--the form to register an account-->
            <div class="login">
            <form method="post">
                
                <input type="text" name="username" placeholder="username" required>
                <br>
                <input type="password" name="password" placeholder="password" required>
                <br>
                <input type="email" name="email" placeholder="e-mail" required>
                <button class="button-name">register</button>
            </form>
            <div class="login-register-member">
                <a class="register-a" href="login.php">already a member? login</a>
            </div>
            </div>
    </div>

    <?php 
    
    if (isset($_POST)) {
        include('config.php');
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $email = $_POST['email'];
        
        $sql = "INSERT INTO users (nameuser, password, email, permissions) VALUES (:username, :password, :email, 0)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":username", $user);
        $stmt->bindParam(":password", $pass);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        session_start();
        $_SESSION['username'] = $result['username'];
        header('location:index.php');
        $conn = null;
    }
    
    ?>

</body>

</html>