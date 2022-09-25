<?php

class Database
{
    private $dsn = 'mysql:host=localhost;dbname=ums_db';
    private $user = 'root';
    private $pass = '';

    public $conn;

    public function __construct()
    {
        try {

            $this->conn = new PDO($this->dsn, $this->user, $this->pass);
            echo 'connected';
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        return $this->conn;
    }
}

$ob = new Database();
