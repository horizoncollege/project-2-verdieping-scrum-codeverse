<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" type="image/x-icon" href="images/icon.png">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <title>CodeVerse details</title>
</head>

<body>
  <?php session_start();
  include('nav.php');
  include('config.php');
  if (!isset($_SESSION['username'])) {
    header("location:login.php");
  } ?>
  <!--the details of the repositories-->
  <div class="maincontainer">
    <h1>add code</h1>
    <form method="POST" action="process.php">
      <input class="detailinh" type="text" required name="repository" placeholder="repository">
      <input class="detailinh" type="date" required name="date">
      <input class="detailinh" type="text" required name="language" placeholder="programming language">
      <input class="detailinh" type="text" required name="tags" placeholder="tags">
      <input class="detailinh" required type="text" name="licence" placeholder="licence">
      <select required name="public">
        <option value="1">public</option>
        <option value="0">private</option>
      </select>
      <div class="editor-holder">
        <div class="scroller">
          <textarea name="code" required spellcheck="false" class="editor allow-tabs">

            </textarea>
          <pre><code class="syntax-highight html"></code></pre>
        </div>
      </div>
      <button type="submit" value="submit">Submit</button>
    </form>
  </div>

  <?php include('footer.php'); ?>

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