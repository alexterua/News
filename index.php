<?php

require_once __DIR__ . '/classes/DataBase.php';

$dbh = new DataBase();

$sql = 'SELECT * FROM news';
$dbh->execute($sql);


require_once __DIR__ . '/templates/index.view.php';