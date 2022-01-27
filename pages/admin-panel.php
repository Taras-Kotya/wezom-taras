<?php require 'admin-source/password.php';?>


<?php

if (
    empty($_SESSION['admin_user']) ||
    empty($_SESSION['admin_pass']) ||
    $_SESSION['admin_user'] != $admin_user ||
    $_SESSION['admin_pass'] != $admin_pass
) {
    ?>
<div style="padding-left: 15px">
    <h1>Вхід в адмін-панель</h1>

    <form method="POST" action="admin-source/auth.php">

        <p>Логін адміна</p>

        <label class="mdc-text-field mdc-text-field--filled">
            <input class="mdc-text-field__input" type="text" name="admin_user">
            <span class="mdc-line-ripple"></span>
        </label>

        <p>Пароль адміна</p>

        <label class="mdc-text-field mdc-text-field--filled">
            <input class="mdc-text-field__input" type="password" name="admin_pass">
            <span class="mdc-line-ripple"></span>
        </label>

        <div style="padding: 10px">
            <input class="mdc-button mdc-button--raised" type="submit" name="Войти" />
        </div>
    </form>
</div>
<?php } else {?>

<h1>Молодець, ти в адмін-панелі. </h1>

<div style="padding: 10px">
    <a href="/admin-source/exit.php" class="mdc-button mdc-button--raised" type="submit"> Вийти </a>
</div>

<?php
}
?>