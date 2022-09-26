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
}
