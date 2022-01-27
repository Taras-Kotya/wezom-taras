<div style="background: #ddd">
    <h1>Практическое задание к уроку №4</h1>
    <pre>Есть такая строка 'one;two;three;four'
Ее необходимо переформатировать ее в следующие виды.

'One;Two;Three;Four'

'1-one;2-two;3-three;4-four'

'four-three-two-one'</pre>
</div>





<h2>Виконання: </h2>

<?php $source = 'one;two;three;four';?>

<?=ucwords($source, ";") # 'One;Two;Three;Four' ?>


<br>
<br>


<?php
$explode = explode(';', $source); // роблю массив

$fa = [];
foreach ($explode as $key => $value) {
    $fa[] = ($key + 1) . '-' . $value; // додаю до массиву нові ключі, з відредагованим значенням
}

$fa = implode(';', $fa); // перетворюю массив назад у строку

echo $fa; # '1-one;2-two;3-three;4-four'
?>


<br>
<br>


<?php

$explode = explode(';', $source); // роблю массив

$array_reverse = array_reverse($explode); // розвертаю

$f = implode('-', $array_reverse); // переводжу в текст, з розділовим знаком "-"

echo $f; #'four-three-two-one'

?>