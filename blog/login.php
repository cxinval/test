<?php ob_start();
include('header.php');
?>
<div class="container">
    <form class="col-6 " action="" method="POST">
        <h1 class="h3 mb-3 fw-normal">Пожалуйста войдите</h1>
        <div class="form-floating">
            <input type="text" class="form-control" name="login" placeholder="name@example.com">
            <label for="floatingInput">Логин</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control mt-3 mb-2" name="password" placeholder="Password">
            <label for="floatingPassword">Пароль</label>
        </div>


        <button class="w-100 btn btn-lg btn-primary" type="submit" name="log_in">Войти</button>
        <a href="reg.php" class="mt-2 w-100 btn btn-lg btn-primary mb-5" type="submit" name="log_in">Регистрация</a>
        <?php


        $user = $_POST['login'];
        $password = $_POST['password'];
        $login = ['login' => $user, 'password' => $password];
        $login_list = [
            ['login' => 'admin', 'password' => '123'],
            ['login' => 'adminn', 'password' => '852456'],
            ['login' => 'cxinval', 'password'  => '654258'],
            ['login' => 'russia', 'password' => '233223'],
            ['login' => 'itproger', 'password' => '0000']
        ];
        if (!empty($_POST)) {
            foreach ($login_list as $key => $value) {
                if ($login['login'] === $value['login'] && $login['password'] === $value['password']) {
                    setcookie('user', 'true', time()+3600, "/"); 
                    header('Location: ../index.php');
                }else{
                    echo '1';
                }
            }
        }

        ?>
    </form>
</div>
<?php include('footer.php');
ob_end_flush(); ?>