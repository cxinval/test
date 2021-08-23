<?php    
    $user = $_POST['login'];
    $password = $_POST ['password'];
    $login = [$user => $password];
    $login_list = ['pf_1' => ['admin' => '123'],
                   'pf_2' => ['adminn' => '852456'],
                   'pf_3' => ['cxinval' => '654258'],
                   'pf_4' => ['russia' => '233223'],
                   'pf_5' => ['itproger' => '0000']];
    foreach($login_list as $key => $value);
    if ($login == $login_list['pf_1']) {
        header("Location:/index.php");
    }elseif ($login == $login_list['pf_2']) {
        header("Location:/index.php");
    }elseif ($login == $login_list['pf_3']) {
        header("Location:/index.php");
    }elseif ($login == $login_list['pf_4']) {
        header("Location:/index.php");
    }elseif ($login == $login_list['pf_5']) {
        header("Location:/index.php");
    }else{
        header("Location:lognot.php");
    }           
?>