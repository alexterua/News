<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новость № <?php echo $article['title']; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="h1 mb-4 pt-2" style="text-align: center;"><?php echo $article['title']; ?></h1>
        <p class="list row col-md-12 mb-6">
            <?php echo $article['text']; ?>
        </p>
        <p>
            <?php echo $article['author']; ?>
        </p>
        <a href="/" class="btn btn-primary">Назад</a>
    </div>
</body>
</html>