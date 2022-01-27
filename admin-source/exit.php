<?php
session_start();

if(!empty($_SESSION['admin_user'])){
    $_SESSION['message'] = 'Ви вийшли';
}
unset($_SESSION['admin_user']);
unset($_SESSION['admin_pass']);


header('Location: /');
