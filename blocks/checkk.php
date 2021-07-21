<?php
$user = $_POST ['user'];
$email = $_POST['email'];
$password = $_POST['password'];

if (trim($user) == '')
    echo 'Ведите ваш Имя';

else if (trim($email) == '')
    echo 'Ведите Ваш Mail';

else if (trim($password) == '')
    echo 'Ведите Ваш Пароль';

header("location: index.php");
exit();

?>