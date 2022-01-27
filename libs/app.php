<?php
require_once('libs/json-form-generator/form.class.php');


function db_connect()
{
    $link = mysqli_connect("127.0.0.1", "root", "123123", "wezom_taras");
    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    // echo "Соединение с MySQL установлено!" . PHP_EOL;
    // echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;
    return $link;
}
$link = db_connect();


function create_tables()
{
    $link = db_connect();
    $queryCreateUsersTable = "CREATE TABLE IF NOT EXISTS `USERS` (
        `id` int(11) unsigned NOT NULL auto_increment,
        `name` varchar(255) NOT NULL default '',
        `surname` varchar(255) NOT NULL default '',
        `tel` varchar(255) NOT NULL default '',
        `email` varchar(255) NOT NULL default '',
        `password` varchar(255) NOT NULL default '',
        PRIMARY KEY  (`ID`)
    )";

    $rezult = mysqli_query($link, $queryCreateUsersTable);
    // debug($rezult);
}


function create_users($array)
{
    $link = db_connect();
    
    if (is_array($array)) {
        $sql = " INSERT INTO USERS SET
        `name`      = '" . htmltext($array['name']) . "',
        `surname`   = '" . htmltext($array['surname']) . "',
        `tel`       = '" . htmltext($array['tel']) . "',
        `email`     = '" . htmltext($array['email']) . "'
        ";

        $rezult = mysqli_query($link, $sql);
    } else {
        $rezult = 'Введи данні';
    }
    // debug($rezult);
}




function delete_users()
{
    $link = db_connect();
    $sql = " DELETE FROM USERS WHERE ID>100";
    $rezult = mysqli_query($link, $sql);
    debug($rezult);
}




function select_users()
{
    $link = db_connect();
    $sql = "SELECT * FROM USERS WHERE ID<51";
    $rezult = mysqli_query($link, $sql);
    return $rezult;
}




function htmltext($text)
{
    $text = trim(htmlspecialchars_decode(addslashes(stripslashes($text))));
    $text = preg_replace('|[\s]+|s', ' ', $text); // удаляем лишние пробелы

    return $text;
}




function get_db($table_name = null)
{
    $content = file_get_contents('db.json');
    $json_data = json_decode($content, true);
    if ($table_name) return $json_data[$table_name];
    return $json_data;
}

function get_db_table($table_name)
{
    $content = file_get_contents('quiz.json');
    $json_data = json_decode($content, true);
    return $json_data[$table_name];
}

function save_db($table_name, $data)
{
    $db = get_db();
    $db[$table_name] = $data;
    $str = json_encode($db);
    file_put_contents('db.json', $str);
}

function getForm($formname)
{
    $form = new Form(['file' => "forms/$formname.json"]);
    return $form;
}

function debug($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}
