<?php
$admin_user = 'admin';
$admin_pass = 'admin';

if (
    !empty($_SESSION['admin_user']) &&
    !empty($_SESSION['admin_pass']) &&
    $_SESSION['admin_user'] == $admin_user &&
    $_SESSION['admin_pass'] == $admin_pass
) {
    $admin_authorized = 1;
}
