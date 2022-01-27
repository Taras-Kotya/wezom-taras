<?php session_start() ?>

<?php
$content = file_get_contents('../quiz.json');
$json_data = json_decode($content);
$rezult = '';

foreach ($json_data as $item) {


    if (is_array($_POST[$item->name])) {
        foreach($_POST[$item->name] as $par) {
            $rezult = $rezult."<p>$par</p>";
        }

    } else {
        $rezult = $rezult."<p>" . $_POST[$item->name] . "</p>";
    }

}

// echo $rezult;

$_SESSION['message'] = 'Спасибо за то что приняли участие в викторине!';

header('Location: /menu');