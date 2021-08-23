<?php

$registr = array($_POST['f_name'], $_POST['l_name'], $_POST['user'], $_POST['email'], $_POST['password']);
foreach ($registr as $value);
if ($value === "") {
    echo "Заполните пустые поля!";
}else {
    header('Location: ../index.php');
exit;
}










?>