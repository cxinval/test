<?php require('header.php');?>
<div class="container">
    <form class="col-6 " action="login_1.php" method="POST">
        <h1 class="h3 mb-3 fw-normal">Пожалуйста войдите</h1>
            <div class="form-floating">
            <input type="text" class="form-control" name="login" placeholder="name@example.com">
            <label for="floatingInput">Логин</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control mt-3 mb-2" name="password" placeholder="Password">
            <label for="floatingPassword">Пароль</label>
        </div>

        <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Запомнить?
        </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" name="log_in">Войти</button>
        <a href="reg.php" class="mt-2 w-100 btn btn-lg btn-primary" type="submit" name="log_in">Регистрация</a>
        
    </form>
</div>
<?php require('footer.php');?>  