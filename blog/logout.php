<?php ob_start();
include('header.php');
?>
<div class="container">
    <form action="" method="POST">
        <input type="submit" name = "exit" value="Выйти">
    </form>
</div>
<?php
setcookie('user', 'true', time()-3600, "/"); 

if($_POST['exit']){
    $_COOKIE['user'];
    header('location: ../index.php');
}
?>
<?php include('footer.php');
ob_end_flush(); ?>