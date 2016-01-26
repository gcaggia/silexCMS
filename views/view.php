<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="style.css" rel="stylesheet" />
    <title>SilexCMS - Home</title>
</head>
<body>
    <header>
        <h1>SilexCMS</h1>
    </header>
    <?php foreach ($articles as $article): ?>
        <article>
            <h2><?php echo $article['art_title']    ?></h2>
            <p> <?php  echo $article['art_content'] ?></p>
        </article>
    <?php endforeach ?>
    <footer class="footer">
        <p><a href="">SilexCMS</a> is a minimalistic CMS built as a showcase for modern PHP development.</p>
    </footer>
</body>
</html>