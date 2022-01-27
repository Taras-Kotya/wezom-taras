<div style="padding-left: 15px">
    <h1>Зворотній зв'язок</h1>

    <form method="POST" action="post/contact.php">

        <p>Ім'я користувача</p>

        <label class="mdc-text-field mdc-text-field--filled">
            <input class="mdc-text-field__input" type="text" name="username">
            <span class="mdc-line-ripple"></span>
        </label>

        <p>Номер телефона</p>

        <label class="mdc-text-field mdc-text-field--filled">
            <input class="mdc-text-field__input" type="num" name="usertel">
            <span class="mdc-line-ripple"></span>
        </label>

        <p>Адреса проживання</p>
        <label class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea mdc-text-field--no-label">
            <span class="mdc-notched-outline">
                <span class="mdc-notched-outline__leading"></span>
                <span class="mdc-notched-outline__trailing"></span>
            </span>
            <span class="mdc-text-field__resizer">
                <textarea class="mdc-text-field__input" name="useradr" rows="8" cols="40" aria-label="Label"></textarea>
            </span>
        </label>

        <div style="padding: 10px">
            <input class="mdc-button mdc-button--raised" type="submit" name="Отправить" />
        </div>

    </form>
</div>
