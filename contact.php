<!DOCTYPE html>
<html lang="en">
<head>
    <title>contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include('nav.php'); ?>

<div class="flow">

    <div class="contacttext">
        <h1>Questions or feedback? We'd love to hear it!</h1>
        <p>If you have any criticism or require any assistence, we'd be glad to hear it! Our staff is always looking for suggestions and feedback. We'll do our best to reply as swiftly as possible.</p>
    </div>

    <div class="contactcontainer">
        <form>
            <label for="firstname">Voornaam:</label>
            <input type="text" required id="firstname" name="firstname"></input>

            <label for="surname">Achternaam:</label>
            <input type="text" required id="surname" name="surname"></input>

            <label for="email">E-mail:</label>
            <input type="email" required id="email" name="email"></input>
            <label for="message">Bericht:</label>
            <textarea maxlength="500" id="message" name="message" rows="5" required></textarea>
            <button id="verzend">Verzenden</button>
        </form>
    </div>

</div>

<?php include('footer.php'); ?>
    
</body>
</html>