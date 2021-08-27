<?php include('header.php'); ?>
<div class="container">
    <form class="col-6 " action="" method="POST">
        <h1 class="h3 mb-3 fw-normal">Пожалуйста войдите</h1>
        <div class="form-floating">
            <input type="text" class="form-control" name="l_name">
            <label for="floatingInput">Фамилия</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control mt-3 mb-2" name="f_name">
            <label for="floatingPassword">Имя</label>
        </div>

        <div class="form-floating">
            <input type="text" class="form-control mt-3 mb-2" name="user">
            <label for="floatingPassword">Логин</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control mt-3 mb-2" name="email">
            <label for="floatingPassword">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control mt-3 mb-2" name="password">
            <label for="floatingPassword">Пароль</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary mb-5" type="submit" name="log_in">Зарегистрироваться</button>
    </form>
    <?php
    $registr = array($_POST['f_name'], $_POST['l_name'], $_POST['user'], $_POST['email'], $_POST['password']);
    foreach ($registr as $value);
    if ($value === "") {
        ?> <span class="text_s"><?echo "Заполните пустые поля!";?></span>
    <?php    
    } else {
        echo '0';
    } ?>
</div>

<?php require('footer.php'); ?>