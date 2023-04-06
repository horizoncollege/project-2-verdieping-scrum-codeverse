<!DOCTYPE html>
<html lang="en">

<head>
    <title>contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    <?php include('nav.php'); ?>

    <div class="flow">

        <div class="contacttext">
            <h1>Questions or feedback? We'd love to hear it!</h1>
            <p>If you have any criticism or require any assistence, we'd be glad to hear it! Our staff is always looking for suggestions and feedback. We'll do our best to reply as swiftly as possible.</p>
            <div class="contactlogodiv">
                <img class="contactlogo" src="images/logo.png" alt="logo">
            </div>
        </div>
        <!--the form for contacting the devs-->
        <div class="contactcontainer">
            <form>
                <label for="firstname">First name:</label>
                <input type="text" required id="firstname" name="firstname"></input>

                <label for="surname">Last name:</label>
                <input type="text" required id="surname" name="surname"></input>

                <label for="email">E-mail:</label>
                <input type="email" required id="email" name="email"></input>
                <label for="message">Message:</label>
                <textarea maxlength="500" id="message" name="message" rows="5" required></textarea>
                <input class="button-name" type="submit" value="Login">
            </form>
        </div>

    </div>

    <?php include('footer.php'); ?>

</body>

</html>
