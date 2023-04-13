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

<div class="body">

      <div class="container">
          <h3 class="search"><?php echo $result['repository'];?></h3>
              <div class="detailcolumn">
                  <div class="detailedit">

                      <div class="detailrow">
                      <label for="date">Date:</label>
                      <time name="date"><?php echo $result['date'];?></time>
                      </div>

                      <div class="detailrow">
                      <label for="language">Language:</label>
                      <p name="language"><?php echo $result['language'];?></p>
                      </div>

                      <div class="detailrow">
                      <label for="tags">Tags:</label>
                      <p ame="tags"><?php echo $result['tags'];?></p>
                      </div>

                      <div class="detailrow">
                      <label for="licence">Licence:</label>
                      <p name="licence"><?php echo $result['licence'];?></p>
                      </div>

                      <div class="detailrow">
                      <label for="public">Visibility:</label>
                      <p name="public"><?php echo ($result['public'] == 0) ? 'private' : 'public'; ?></p>
                      </div>
                      <pre><code class="textareacode"<?php echo $result['language'];?>><?php echo htmlspecialchars($result['code']);?></code></pre>
                  </div>
    <input disabled type="text" value="localhost//////project-2-verdieping-scrum-codeverse/detail.php?id=<?php echo $id; ?>" id="myInput">
<button onclick="myFunction()">Copy text</button>

<script>
function myFunction() {

  var copyText = document.getElementById("myInput");

  copyText.select();
  copyText.setSelectionRange(0, 99999);

  navigator.clipboard.writeText(copyText.value);
  
}
</script>
              </div>
      </div>


</div>

    <?php include('footer.php'); ?>

    <!-- include the highlight.js script and initialize it -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
</body>
</html>