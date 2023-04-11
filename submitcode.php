<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>CodeVerse details</title>
</head>

<body>
<?php session_start(); include('nav.php'); include('config.php'); if (!isset($_SESSION['username'])) {header("location:login.php");} ?>
 <!--the datails of the repository's-->
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



    <style>
        .editor-holder {
      width: 800px;
      height: 500px;
      margin-top: 50px;
      border-radius: 3px;
      position: relative;
      top: 0;
      margin: 15px auto;
      background: #1f1f1f !important;
      overflow: auto;
      box-shadow: 5px 5px 10px 0px rgba(0, 0, 0, 0.4);
      transition: all 0.5s ease-in-out;
    }

    .editor-holder textarea, .editor-holder code {
      width: 100%;
      height: auto;
      min-height: 450px;
      font-size: 14px;
      border: 0;
      margin: 0;
      top: 46px;
      left: 0;
      padding: 20px !important;
      line-height: 21px;
      position: absolute;
      font-family: Consolas, Liberation Mono, Courier, monospace;
      overflow: visible;
      transition: all 0.5s ease-in-out;
    }
    .editor-holder textarea {
      background: transparent !important;
      z-index: 2;
      height: auto;
      resize: none;
      color: #fff;
      text-shadow: 0px 0px 0px rgba(0, 0, 0, 0);
      -webkit-text-fill-color: transparent;
    }
    .editor-holder textarea::-webkit-input-placeholder {
      color: white;
    }
    .editor-holder textarea:focus {
      outline: 0;
      border: 0;
      box-shadow: none;
    }
    .editor-holder code {
      z-index: 1;
    }
    
    pre {
      white-space: pre-wrap;
      white-space: -moz-pre-wrap;
      white-space: -pre-wrap;
      white-space: -o-pre-wrap;
      word-wrap: break-word;
    }
    pre code {
      background: #1f1f1f !important;
      color: #adadad;
    }
    pre code .hljs {
      color: #a9b7c6;
      background: #282b2e;
      display: block;
      overflow-x: auto;
      padding: 0.5em;
    }
    pre code .hljs-number,
    pre code .hljs-literal,
    pre code .hljs-symbol,
    pre code .hljs-bullet {
      color: #6897BB;
    }
    pre code .hljs-keyword,
    pre code .hljs-selector-tag,
    pre code .hljs-deletion {
      color: #cc7832;
    }
    pre code .hljs-variable,
    pre code .hljs-template-variable,
    pre code .hljs-link {
      color: #629755;
    }
    pre code .hljs-comment,
    pre code .hljs-quote {
      color: #808080;
    }
    pre code .hljs-meta {
      color: #bbb529;
    }
    pre code .hljs-string,
    pre code .hljs-attribute,
    pre code .hljs-addition {
      color: #6A8759;
    }
    pre code .hljs-section,
    pre code .hljs-title,
    pre code .hljs-type {
      color: #ffc66d;
    }
    pre code .hljs-name,
    pre code .hljs-selector-id,
    pre code .hljs-selector-class {
      color: #e8bf6a;
    }
    pre code .hljs-emphasis {
      font-style: italic;
    }
    pre code .hljs-strong {
      font-weight: bold;
    }
    </style>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src='https://use.fontawesome.com/b2c0f76220.js'></script>
    <script src='https://raw.githubusercontent.com/emmetio/textarea/master/emmet.min.js'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/highlight.min.js'></script>
    <script>
        var tabCharacter = "  ";
var tabOffset = 2;

$(document).on('click', '#indent', function(e){
	e.preventDefault();
	var self = $(this);
	
	self.toggleClass('active');
	
	if(self.hasClass('active'))
	{
		tabCharacter = "\t";
		tabOffset = 1;
	}
	else
	{
		tabCharacter = "  ";
		tabOffset = 2;
	}
})

$(document).on('click', '#fullscreen', function(e){
	e.preventDefault();
	var self = $(this);
	
	self.toggleClass('active');
	self.parents('.editor-holder').toggleClass('fullscreen');
});

/*------------------------------------------
	Render existing code
------------------------------------------*/
$(document).on('ready', function(){
	hightlightSyntax();
	
	emmet.require('textarea').setup({
    pretty_break: true,
    use_tab: true
	});
});




/*------------------------------------------
	Capture text updates
------------------------------------------*/
$(document).on('ready load keyup keydown change', '.editor', function(){
	correctTextareaHight(this);
	hightlightSyntax();
});


/*------------------------------------------
	Resize textarea based on content  
------------------------------------------*/
function correctTextareaHight(element)
{
  var self = $(element),
      outerHeight = self.outerHeight(),
      innerHeight = self.prop('scrollHeight'),
      borderTop = parseFloat(self.css("borderTopWidth")),
      borderBottom = parseFloat(self.css("borderBottomWidth")),
      combinedScrollHeight = innerHeight + borderTop + borderBottom;
  
  if(outerHeight < combinedScrollHeight )
  {
    self.height(combinedScrollHeight);
  }
}
// function correctTextareaHight(element){
// 	while($(element).outerHeight() < element.scrollHeight + parseFloat($(element).css("borderTopWidth")) + parseFloat($(element).css("borderBottomWidth"))) {
// 		$(element).height($(element).height()+1);
// 	};
// }


/*------------------------------------------
	Run syntax hightlighter  
------------------------------------------*/
function hightlightSyntax(){
	var me  = $('.editor');
	var content = me.val();
	var codeHolder = $('code');
	var escaped = escapeHtml(content);
	
	codeHolder.html(escaped);
	
	$('.syntax-highight').each(function(i, block) {
		hljs.highlightBlock(block);
	});
}


/*------------------------------------------
	String html characters
------------------------------------------*/
function escapeHtml(unsafe) {
	return unsafe
			 .replace(/&/g, "&amp;")
			 .replace(/</g, "&lt;")
			 .replace(/>/g, "&gt;")
			 .replace(/"/g, "&quot;")
			 .replace(/'/g, "&#039;");
}


/*------------------------------------------
	Enable tabs in textarea
------------------------------------------*/
$(document).delegate('.allow-tabs', 'keydown', function(e) {
	var keyCode = e.keyCode || e.which;

	if (keyCode == 9) {
		e.preventDefault();
		var start = $(this).get(0).selectionStart;
		var end = $(this).get(0).selectionEnd;

		// set textarea value to: text before caret + tab + text after caret
		$(this).val($(this).val().substring(0, start)
								+ tabCharacter
								+ $(this).val().substring(end));

		// put caret at right position again
		$(this).get(0).selectionStart =
		$(this).get(0).selectionEnd = start + tabOffset;
	}
});
    </script>
</body>
</html>