<?php session_start() ?>

<?php

$username = $_POST['username'];

$usertel = $_POST['usertel'];

$useradr = $_POST['useradr'];

if (empty($username)) {
    $_SESSION['message'] =  'Ви не ввели ім\'я';
} elseif (empty($usertel)) {
    $_SESSION['message'] =  'Ви не ввели телефон';
} elseif(!is_numeric($usertel)) {
    $_SESSION['message'] =  'Телефон повинен бути із цифр.';
} elseif (empty($useradr)) {
    $_SESSION['message'] =  'Ви не ввели адресу';
} else {

    $data = $username . ';' . $usertel . ';' . $useradr . PHP_EOL;

    file_put_contents($usertel . '.txt', $data, FILE_APPEND);

    $_SESSION['message'] = 'Форма была отправлена!';

}

header('Location: /contact');