<?php
$login = $_POST['login']; 
$password = $_POST['password'];

if(($login === "") || ($password ==="")){
    echo 'Введите логин и пароль';
}elseif (($login != 'admin') || ($password != '123')) {
    echo 'Логин или пароль не верный';
}
elseif(($login === "admin") || ($password ==="123")){
    header('Location: ../index.php');
exit;
}










?>