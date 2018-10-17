<?php

require_once __DIR__ . '/functions.php';

require_once __DIR__ . '/classes/News.php';
require_once __DIR__ . '/classes/View.php';

$news = new News();
$article = $news->getNews()[$_GET['id']];

$view = new View();
$view->assign('article', $article);
echo $view->render('article.view.php');