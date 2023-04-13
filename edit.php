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
<div class="maincontainer">
    <h3 class="search"><?php echo $result['repository'];?></h3>
        <div class="formcolumn">
            <form method="POST" action="update.php" class="nog">
                
              <input type="hidden" value="<?php echo $id; ?>" name="ident">

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
                    <textarea name="code" required spellcheck="false" class="editor allow-tabs"><?php echo $result['code']?></textarea>
                    <pre><code class="syntax-highight html"></code></pre>
                </div>
                </div>

                <h1 class="h1submit"><button class="button-name" type="submit" value="submit">submit</button></h1>
            </form>
</div>

</div>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src='https://use.fontawesome.com/b2c0f76220.js'></script>
  <script src='https://raw.githubusercontent.com/emmetio/textarea/master/emmet.min.js'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/highlight.min.js'></script>

  <script>
    var tabCharacter = "  ";
    var tabOffset = 2;

    $(document).on('click', '#indent', function(e) {
      e.preventDefault();
      var self = $(this);

      self.toggleClass('active');

      if (self.hasClass('active')) {
        tabCharacter = "\t";
        tabOffset = 1;
      } else {
        tabCharacter = "  ";
        tabOffset = 2;
      }
    })

    $(document).on('click', '#fullscreen', function(e) {
      e.preventDefault();
      var self = $(this);

      self.toggleClass('active');
      self.parents('.editor-holder').toggleClass('fullscreen');
    });

    $(document).on('ready', function() {
      hightlightSyntax();

      emmet.require('textarea').setup({
        pretty_break: true,
        use_tab: true
      });
    });
    $(document).on('ready load keyup keydown change', '.editor', function() {
      correctTextareaHight(this);
      hightlightSyntax();
    });
    function correctTextareaHight(element) {
      var self = $(element),
        outerHeight = self.outerHeight(),
        innerHeight = self.prop('scrollHeight'),
        borderTop = parseFloat(self.css("borderTopWidth")),
        borderBottom = parseFloat(self.css("borderBottomWidth")),
        combinedScrollHeight = innerHeight + borderTop + borderBottom;

      if (outerHeight < combinedScrollHeight) {
        self.height(combinedScrollHeight);
      }
    }

    function hightlightSyntax() {
      var me = $('.editor');
      var content = me.val();
      var codeHolder = $('code');
      var escaped = escapeHtml(content);

      codeHolder.html(escaped);

      $('.syntax-highight').each(function(i, block) {
        hljs.highlightBlock(block);
      });
    }

    function escapeHtml(unsafe) {
      return unsafe
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
    }

    $(document).delegate('.allow-tabs', 'keydown', function(e) {
      var keyCode = e.keyCode || e.which;

      if (keyCode == 9) {
        e.preventDefault();
        var start = $(this).get(0).selectionStart;
        var end = $(this).get(0).selectionEnd;

        $(this).val($(this).val().substring(0, start) +
          tabCharacter +
          $(this).val().substring(end));

        $(this).get(0).selectionStart =
          $(this).get(0).selectionEnd = start + tabOffset;
      }
    });
  </script>
</body>

</html>

