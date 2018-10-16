<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="h1 mb-4 pt-2" style="text-align: center;">Новости</h1>
    <ul class="news__list list-group row col-md-12">
    <?php /*foreach ($news->getNews() as $article):*/ ?>
    <?php for ($i = count($news->getNews()) - 1; $i >= 0; $i--): ?>
        <?php $article = $news->getNews()[$i]; ?>
        <li class="news__item list-group-item mb-2" style="border: 2px solid #0069D9; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;">
            <a href="article.php?id=<?php echo $article['id']; ?>" class="news__link"><?php echo $article['title']; ?></a>
            <p>Автор: <?php echo $article['author']; ?></p>
        </li>
    <?php endfor; ?>
    </ul>
</div>
</body>
</html>