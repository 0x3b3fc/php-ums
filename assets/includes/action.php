<?php

session_start();

require_once 'auth.php';

$user = new Auth();
if (isset($_POST['action']) && $_POST['action'] == 'register') {
    $name = $user->test_input($_POST['name']);
    $email = $user->test_input($_POST['email']);
    $password = $user->test_input($_POST['password']);

    $hpassword = password_hash($password, PASSWORD_BCRYPT);

    if ($user->user_exist($email)) {
        echo $user->showMessage('warning', 'هذا البريد الإلكتروني موجود بالفعل');
    } else {
        if ($user->register($name, $email, $hpassword)) {
            echo 'register';
            $_SESSION['user'] = $email;
        } else {
            echo $user->showMessage('danger', 'يوجد خطأ, برجاء المحاولة لاحقا');
        }
    }
}
