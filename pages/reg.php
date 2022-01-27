<h1>Адресна книга</h1>

<?php
$form = getForm('reg');
$form->show();
?>


<?php
$sql = "SELECT * FROM `USERS` ";
$qwe = mysqli_query($link, $sql);

?>
<h2>Виводжу БД:</h2>
<pre><?php
foreach ($qwe as $key => $value) {
    print_r($value);
}
?>
</pre>