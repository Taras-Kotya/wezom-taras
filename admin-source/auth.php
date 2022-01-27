<?php
session_start();

require 'password.php';

$post_user = $_POST['admin_user'];

$post_pass = $_POST['admin_pass'];

$useradr = $_POST['useradr'];

if (empty($post_user) || empty($post_pass)) {
    $_SESSION['message'] = 'Ви не ввели логін або пароль';
} elseif ($post_user != $admin_user) {
    $_SESSION['message'] = 'Логін невірний (admin)';
} elseif ($post_pass != $admin_pass) {
    $_SESSION['message'] = 'Пароль невірний (admin)';
} else {

    $_SESSION['admin_user'] = $admin_user;
    $_SESSION['admin_pass'] = $admin_pass;
    $_SESSION['message'] = 'Ви успішно ввійшли ';

}

header('Location: /admin');
