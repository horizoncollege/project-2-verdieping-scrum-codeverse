<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <footer>
        <div>
            <h1>codeverse</h1>
        </div>






        <div class="footertekst">
            <div>
                <p><img class="footericon" src="images/mail.jpg" alt="logo"></p>
                <p><img class="footericon" src="images/maps.png" alt="logo"></p>
            </div>
            <div class="footerinfo">
                <p class="mail">Codeverse@gmail.com</p>
                <p class="maps">Kruseman van Eltenweg 4, 1817 BC Alkmaar</p>
            </div>
        </div>
        <div>
        <p><a href="index.php">home</a></p>
        <p><a href="contact.php">contact</a></p>
        <p><a href="mycode.php">my code</a></p>
    </div>
     
        <p></p>

        <div class="copyright">
            <p>©CodeVerse Media Ltd.</p>
        </div>


    </footer>
</body>

</html>

<style>

    .footerh1 {
        display: flex;
        justify-content: space-between;
    }
    .footericon {
        width: 30px;
        height: 30px;
    }
    footer {
        color: #ffffff;
        background-color: rgba(71, 61, 139, 0.881);
        align-items: center;

    }
    a {
        color: white;
    }
    .footertekst {
        display: flex;
        flex-direction: row;
    }

    .footerinfo {
        margin-left: 10px;
    }

    .mail {
        margin-top: 23px;
    }

    .maps {
        margin-top: 30px;
    }
</style>