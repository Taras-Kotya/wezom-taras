<?php
session_start() ;
chdir('..');
require_once('libs/app.php');
?>



<?php
    $name = htmltext($_POST['name']);
    $email = htmltext($_POST['email']);

    $sql = "SELECT * FROM `USERS` WHERE `email` = '$email' LIMIT 1";
    $qwe = mysqli_query($link, $sql);



    if($qwe->num_rows == 0){
        create_users($_POST);
        $_SESSION['message'] = 'Успішна реєстрація';
    } else {
        $_SESSION['message'] = 'Помилка реєстрації. Користувач з цим емейлом знайдений';
    }

    header('Location: /reg');