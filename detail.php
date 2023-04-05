<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/stackoverflow-dark.min.css">
    <title>CodeVerse</title>
</head>

<body>
    <?php include('nav.php'); ?>
    <h2>detail</h2>
 <!--the datails of the repository's-->
    <div class="maincontainer">
        <h3>repository name:</h3>
        <p class="detailinh">date of upload/last update:</p>
        <p class="detailinh">languages and license:</p>
        <p class="detailinh">author:</p>
        <p class="detailinh">tags:</p>
        <h3>code:</h3>
        <div class="edit-code-input">
        <pre>
        <code class="language-html">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
&lt;meta charset="UTF-8"&gt;
&lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
&lt;title&gt;Document&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;/body&gt;
&lt;/html&gt;
        </code>
    </pre>
        </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
    <script>
        hljs.highlightAll();
    </script>
    <?php include('footer.php'); ?>
</body>
</html>

