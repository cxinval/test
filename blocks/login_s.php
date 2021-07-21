<?php
$admin = $_POST['email_log'];
$pass = $_POST['password_log'];
if (trim($admin) == 'admin'){
    echo 'Ведите пароль';
}


