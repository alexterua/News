<?php

require_once __DIR__ . '/Article.php';
require_once __DIR__ . '/DataBase.php';

class News
{
    protected $news = [];
    protected $dbh;

    public function __construct()
    {
        // Read from bd
        $this->dbh = new DataBase();
        $sql = 'SELECT * FROM news';
        $news = $this->dbh->query($sql, $this->news);
        $this->news = $news;
    }

    public function getNews()
    {
        return $this->news;
    }

    public function addOneNews(Article $article)
    {
        $this->news[] = $article;

        // Write to bd array $news
        $sql = "INSERT INTO news (id, title, text, author) VALUES ( {$article['id']}, {$article['title']}, {$article['text']}, {$article['author']})";
        $this->dbh->query($sql, $article);
    }
}