<?php

require_once __DIR__. '/functions.php';

require_once __DIR__ . '/classes/News.php';
require_once __DIR__ . '/classes/View.php';

$news = new News();

$view = new View();
$view->assign('news', $news);

echo $view->render('index.view.php');