<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="style.css" rel="stylesheet" />
    <title>MicroCMS - Home</title>
</head>
<body>
    <header>
        <h1>MicroCMS</h1>
    </header>
    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=microcms;charset=utf8', 'microcms_user', 'secret');
    $articles = $bdd->query('select * from t_article order by art_id desc');
    foreach ($articles as $article): ?>
        <article>
            <h2><?php echo $article['art_title']   ?></h2>
            <p><?php  echo $article['art_content'] ?></p>
        </article>
    <?php endforeach ?>
    <footer class="footer">
        <a href="">MicroCMS</a> is a minimalistic CMS built as a showcase for modern PHP development.
    </footer>
</body>
</html>