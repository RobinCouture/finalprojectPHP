<?php 

class Database
{
    private $pdo;
    private $stmt;

    public function __construct()
    {
        $config = require '../config/config.php';

        $this->pdo = new PDO("mysql:host={$config['host']};dbname={$config['dbname']}", $config['username'], $config['password']);
    }

    public function prepare(string $query)
    {
        $this->stmt = $this->pdo->prepare($query);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function results()
    {
        $this->execute();
        return $this->stmt->fetchAll();
    }
}