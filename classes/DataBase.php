<?php


class DataBase
{
    protected $dbh;
    protected $config;

    public function __construct()
    {
        $this->config = require_once realpath(__DIR__ . '/../config.php');

        $this->dbh = new PDO("mysql:host={$config['host']};dbname={$config['dbname']}",
            $config['user'],
            $config['password']);
    }

    public function execute(string $sql)
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute();
    }

    public function query(string $sql, array $data)
    {
        $sth = $this->dbh->prepare($sql);
        if ($sth->execute($data)) {
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }
}