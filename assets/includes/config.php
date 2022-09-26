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
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        return $this->conn;
    }

    // check input

    public function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // error success message Alert
    public function showMessage($type, $message)
    {
        return '<div class=" text-center alert alert-' . $type . ' alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong class="text-center">' . $message . '</strong>
        </div>';
    }
}
