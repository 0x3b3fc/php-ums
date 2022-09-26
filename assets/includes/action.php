<?php

session_start();

require_once 'auth.php';
$user = new Auth();

// handle register ajax request
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

// handle login ajax request

if (isset($_POST['action']) && $_POST['action'] == 'login') {
    $email = $user->test_input($_POST['email']);
    $password = $user->test_input($_POST['password']);

    $loggedInUser = $user->login($email);

    if ($loggedInUser != null) {
        if (password_verify($password, $loggedInUser['password'])) {
            if (!empty($_POST['rem'])) {
                setcookie('email', $email, time() + (30 * 24 * 60 * 60), '/');
                setcookie('password', $password, time() + (30 * 24 * 60 * 60), '/');
            } else {
                setcookie('email', '', 1, '/');
                setcookie('password', '', 1, '/');
            }
            echo 'login';
            $_SESSION['user'] = $email;
        } else {
            echo $user->showMessage('danger', 'كلمة المرور غير صحيحة');
        }
    } else {
        echo $user->showMessage('danger', 'لا يوجد مستخدم بهذا البريد الإلكتروني');
    }
}
