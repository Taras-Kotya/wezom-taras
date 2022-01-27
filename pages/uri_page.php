<?php

    $page = str_replace('/', '', $_SERVER['REQUEST_URI']); // видаляємо /
    $page_uri = 'pages/' . $page . '.php'; // файл, який шукаємо

    if (file_exists($page_uri)) {
        include_once $page_uri; // під'єднуємо
    } else {
        include_once 'main-page.php';
    }
?>
