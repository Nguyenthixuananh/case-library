<?php

class DB
{
    private $dsn;
    private $username;
    private $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=library;charset=utf8";
        $this->username = "root";
        $this->password = "xuananh9699";
    }

    public function connect()
    {
        try {
            $conn = new PDO($this->dsn, $this->username, $this->password);
            return $conn;
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }
}