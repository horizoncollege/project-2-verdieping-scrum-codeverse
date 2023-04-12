<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="images/icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-- include the highlight.js stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/styles/vs2015.min.css">
    <title>CodeVerse details</title>
</head>

<body>
<?php session_start();
  include('config.php');
  if (!isset($_SESSION['username'])) {
    header("location:login.php");
  } ?>
    <?php include('nav.php'); include('config.php'); 
    $id = $_GET['id'];
    $sql = "SELECT * FROM code WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch();
    ?>
    <!--the details of the repository-->
    <div class="maincontainer">
        <div class="formcolumn">
            <form method="POST" action="process.php" class="nigg">
                
                <div class="formrow">
                <label class="detailmarg" for="repository">Repository name:</label>
                <p><?php echo $result['repository'];?></p>
                </div>

                <div class="formrow">
                <label class="detailmarg" for="date">Date:</label>
                <p><?php echo $result['date'];?></p>
                </div>

                <div class="formrow">
                <label class="detailmarg" for="language">Language:</label>
                <p><?php echo $result['language'];?></p>
                </div>

                <div class="formrow">
                <label class="detailmarg" for="tags">Tags:</label>
                <p><?php echo $result['tags'];?></p>
                </div>

                <div class="formrow">
                <label class="detailmarg" for="licence">Licence:</label>
                <p><?php echo $result['licence'];?></p>
                </div>

                <div class="formrow">
                <label class="detailmarg" for="public">Visibility:</label>
                <p><?php $result['public'];
                if($result['public'] = 1){
                  echo 'public';
                } else {
                  echo 'private';
                }?></p>
                </div>
        </div>
        <br><br><br><br><br><br><br>
        <!-- use a <pre> tag with a <code> tag for displaying the code -->
        <pre><code class="textareacode"<?php echo $result['language'];?>><?php echo htmlspecialchars($result['code']);?></code></pre>
    </div>
    <?php include('footer.php'); ?>

    <!-- include the highlight.js script and initialize it -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
</body>
</html>
