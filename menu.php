<header class="mdc-top-app-bar mdc-top-app-bar--fixed">
    <div class="mdc-top-app-bar__row">
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <a href="/" class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button" aria-label="Open navigation menu">menu</a>
            <span class="mdc-top-app-bar__title">Page title</span>
        </section>
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">

            <?php require 'admin-source/password.php' ?>
            <?php
            // Якщо адмін авторизувався
            if (!empty($admin_authorized)) {
                echo '
                <a href="/admin-source/exit.php" class="mdc-button mdc-button--raised">Вихід</a>';
            }
            ?>
            <a href="/reg" class="mdc-button mdc-button--raised">Реєстрація</a>
            <a href="/admin-panel" class="mdc-button mdc-button--raised">Admin</a>
            <a href="/contact" class="mdc-button mdc-button--raised">Contact</a>
            <a href="/portfolio" class="mdc-button mdc-button--raised">Portfolio</a>
            <a href="/quiz" class="mdc-button mdc-button--raised">Викторина</a>
        </section>
    </div>
</header>