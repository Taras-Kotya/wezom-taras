<?php session_start() ?>
<?php
require_once('libs/app.php');
// $json_data = get_db_table('question');
// debug($json_data);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My super-puper web-site</title>
    <meta name="description" content="bla bla bla">
    <meta name="author" content="taras.victorovich.96@gmail.com">
    <link href="/node_modules/material-components-web/dist/material-components-web.min.css" rel="stylesheet">
    <script src="/node_modules/material-components-web/dist/material-components-web.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="main.css?v1">
</head>

<body>



    <?php include 'menu.php' ?>

    <div id="main-content"></div>

    <?php if (array_key_exists('message', $_SESSION)) : ?>
        <div style="width: 350px; height: 100%; padding: 10px; background: red">

            <?php

            echo $_SESSION['message'];
            unset($_SESSION['message']);

            ?>

        </div>

    <?php endif ?>



    <?php require 'pages/uri_page.php'; // під'єднуємо GET-файли 
    ?>

    <?php include 'footer.php'; ?>
</body>

</html>