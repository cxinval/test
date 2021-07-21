<?php
require('blocks/header.php') ?>
<div class="main">
    <div class="container">
        <form class="regestr" action="blocks/login_s.php" method="post">
            <input class="regestr-input" type="mail" name="email_log" placeholder="Ведите Email">
            <input class="regestr-input" type="password" name="password_log" placeholder="Ведите пароль">
            <button class="send">Отправить</button>
        </form>
    </div>
</div>