<?php
    chdir('..');
    require_once('libs/app.php');
    $bd = get_db('portfolio');
    $bd[] = array('title' => $_POST['firstName']);
    debug($bd);
    save_db('portfolio', $bd);