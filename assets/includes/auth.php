<?php
require_once 'config.php';

class Auth extends Database
{
    //register new user
    public function register($name, $email, $password)
    {
        $sql = 'insert into users (name,email,password) values (:name,:email,:password)';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['name' => $name, 'email' => $email, 'password' => $password]);
        return true;
    }

    // check user if already registred
    public function user_exist($email)
    {
        $sql = 'select email from users where email = :email';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    // login existing user
    public function login($email)
    {
        $sql = 'select email,password from users where email = :email and deleted != 0';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    // current user in session
    public function currentUser($email)
    {
        $sql = 'select * from users where email = :email and deleted != 0';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
}
