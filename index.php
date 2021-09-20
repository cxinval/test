<?php
session_start();
include('blog/header.php');

if (!isset($_SESSION['cur_sort']))
    $_SESSION['cur_sort'] = ['type' => 'name', 'direction' => 'asc'];

$curSort = $_GET['sort_type'] ? $_SESSION['cur_sort']['type'] = $_GET['sort_type'] : $_SESSION['cur_sort']['type'];
$curDir = $_GET['sort_direction'] ? $_SESSION['cur_sort']['direction'] = $_GET['sort_direction'] : $_SESSION['cur_sort']['direction'];
?>
<main>
    <div class="container">
        <div class="mb-3 l_search mb-5">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid search_btn">
                    <form action="" method="POST" class="d-flex form_list">
                        <input class="form-control me-2" list="list" type="search" placeholder="Что ищем?"
                               value="<?php echo isset($_POST['b_search']) ? $_POST['b_search'] : NULL; ?>"
                               name="b_search">
                        <input class="btn btn-outline-success" type="submit" placeholder="Поиск" value="Поиск">
                        <datalist id="list">
                            <option value="PHP 7">
                            <option value="Компьютер глазами хакера"></option>
                            <option value="PHP и MySQL. Разработка веб-приложений">
                        </datalist>
                    </form>

                    <form class='form-sort' method="GET" id="myIframe">
                        <button class="btn btn-outline-dark add_btn <?= $curSort == 'date' && $curDir == 'asc' ? 'active' : '' ?>"
                                name="sortDate" type="submit" value="asc">Дата возрастание
                        </button>
                        <button class="btn btn-outline-dark add_btn <?= $curSort == 'date' && $curDir == 'desc' ? 'active' : '' ?>"
                                name="sortDate" type="submit" value="desc">Дата убывание
                        </button>
                        <button class="btn btn-outline-dark add_btn <?= $curSort == 'name' && $curDir == 'asc' ? 'active' : '' ?>"
                                name="sortBtnNameA" type="submit" value="От А до Я">Название возрастание
                        </button>
                        <button class="btn btn-outline-dark add_btn  <?= $curSort == 'name' && $curDir == 'desc' ? 'active' : '' ?>"
                                name="sortBtnNameZ" type="submit" value="От Я до А">Название убывание
                        </button>
                    </form>
                </div>
            </nav>
        </div>
        <div class="main-wrap">

            <?php


            $s_list = [
                ['name' => 'PHP 7', 'img' => 'img/1.jpg', 'date' => 1496188800],
                ['name' => 'Компьютер глазами хакера', 'img' => 'img/2.jpg', 'date' => 1355702400],
                ['name' => 'PHP и MySQL. Разработка веб-приложений', 'img' => 'img/3.jpg', 'date' => 1467158400],
            ];


            if (!empty($_POST) && isset($_POST['addNameBook']) && isset($_POST['addDateBook'])) {
                $date = $_POST['addDateBook'];
                $formatDateBook = strtotime($date);
                $_SESSION['books'][] = ['name' => $_POST['addNameBook'], 'img' => 'img/1.jpg', 'date' => date("d.M.Y", $formatDateBook)];
            }

            if ($_SESSION['books'] != null) {
                $s_list = array_merge($_SESSION['books'], $s_list);
            }

            switch ($curSort) {
                case 'date':
                    $fSort = $curDir == 'asc' ? function ($a, $b) {
                        return $a['date'] <=> $b['date'];
                    } : function ($a, $b) {
                        if ($a['data'] == $b['date']) return 0;
                        return $a['date'] > $b['date'] ? -1 : 1;
                    };
                    break;
                case 'name':
                    $fSort = $curDir == 'asc' ? function ($a, $b) {
                        if ($a['name'] == $b['name']) return 0;
                        return $a['name'] < $b['name'] ? -1 : 1;
                    } : function ($a, $b) {
                        if ($a['name'] == $b['name']) return 0;
                        return $a['name'] > $b['name'] ? 1 : 1;
                    };
                    break;
            }

            if (isset($fSort)) {
                usort($s_list, $fSort);
            }

            if ($_POST['b_search'] != '') {
                $s_list = array_filter(
                    $s_list,
                    function (array $val) {
                        return strripos(strtolower($val['name']), strtolower($_POST['b_search'])) !== false;
                    }
                );
            }
            foreach ($s_list as $key => $value) {

                ?>
                <div class="cards">
                    <div class="card-main">
                        <h4 class="my-0 fw-normal book__title card__title"><? echo $value['name'] ?></h4>
                        <img class="book-img" src="<? echo $value['img'] ?>" alt=""/>
                        <span class="book__year"><? echo date('Y-m-d H:i:s', $value['date']) ?></span>
                        <div class="card-body">
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary btn_card"> Подробней
                            </button>
                        </div>
                    </div>
                </div>
            <?php } ?>


            <a href="blog\add.php" class="btn btn-outline-dark add_btn">Добавить свое!</a>
        </div>
</main>
<?php

include('blog/footer.php');

?>
