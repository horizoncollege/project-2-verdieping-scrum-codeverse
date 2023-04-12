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

<div class="container">
    <h3 class="search"><?php echo $result['repository'];?></h3>
        <div class="formcolumn">
            <form method="POST" action="update.php" class="formedit">
                
                <div class="formrow">
                <label for="repository">Repository name:</label>
                <input type="text" required name="repository" value="<?php echo $result['repository'];?>">
                </div>

                <div class="formrow">
                <label for="date">Date:</label>
                <input type="date" required name="date" value="<?php echo $result['date'];?>">
                </div>

                <div class="formrow">
                <label for="language">Language:</label>
                <input type="text" required name="language" value="<?php echo $result['language'];?>">
                </div>

                <div class="formrow">
                <label for="tags">Tags:</label>
                <input type="text" required name="tags" value="<?php echo $result['tags'];?>">
                </div>

                <div class="formrow">
                <label for="licence">Licence:</label>
                <input required type="text" name="licence" value="<?php echo $result['licence'];?>">
                </div>

                <div class="formrow">
                <label for="public">Visibility:</label>
                <select required name="public" >
                    <option value="1">public</option>
                    <option value="0">private</option>
                </select>
                </div>
        </div>
                <div class="editor-holder">
                <div class="scroller">
                    <textarea name="code" required spellcheck="false" class="editor allow-tabs"></textarea>
                    <pre><code class="syntax-highight html"></code></pre>
                </div>
                </div>

                <h1 class="h1submit"><a href="contact.php"><input class="button-name" type="submit" value="submit"></a></h1>
            </form>
</div>

</body>
</html>