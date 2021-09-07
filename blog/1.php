<?php
session_start();
include('header.php'); ?>
<main>
  <div class="container">
    <div class="mb-3 l_search mb-5">
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid search_btn">
          <form action="" method="POST" class="d-flex form_list">
            <input class="form-control me-2" list="list" type="search" placeholder="Что ищем?" value="<?php echo isset($_POST['b_search']) ? $_POST['b_search'] : NULL; ?>" name="b_search">
            <input class="btn btn-outline-success" type="submit" placeholder="Поиск" value="Поиск">
            <datalist id="list">
              <option value="PHP 7">
              <option value="Компьютер глазами хакера"></option>
              <option value="PHP и MySQL. Разработка веб-приложений">
            </datalist>
          </form>

          <form class='form-sort' method="GET" id="myIframe">
            <input class="btn btn-outline-dark add_btn <?= ($_GET['sortBtnDateUp'] === 'Дата возрастание') ? 'active' : '' ?>" name="sortBtnDateUp" type="submit" value="Дата возрастание" />
            <input class="btn btn-outline-dark add_btn <?= ($_GET['sortBtnDateDown'] === 'Дата убывание') ? 'active' : '' ?>" name="sortBtnDateDown" type="submit" value="Дата убывание" />
            <input class="btn btn-outline-dark add_btn <?= ($_GET['sortBtnNameA'] === 'От А до Я') ? 'active' : '' ?>" name="sortBtnNameA" type="submit" value="От А до Я" />
            <input class="btn btn-outline-dark add_btn <?= ($_GET['sortBtnNameZ'] === 'От Я до А') ? 'active' : '' ?>" name="sortBtnNameZ" type="submit" value="От Я до А" />
          </form>
        </div>
      </nav>
    </div>
    <div class="main-wrap">

      <?php
      

      if (isset($_GET['sortBtnDateUp'])) {
          $_SESSION['sortDownDate'] = usort($s_list, function ($a, $b) {
          return $a['date'] <=> $b['date'];
        });
      }
      if (isset($_GET['sortBtnDateDown'])) {
        $sortUpDate = usort($s_list, function ($a, $b) {
          if ($a['data'] == $b['date']) return 0;
          return $a['date'] > $b['date'] ? -1 : 1;
        });
      }
      if (isset($_GET['sortBtnNameA'])) {
        $sortDownLet = usort($s_list, function ($a, $b) {
          if ($a['name'] == $b['name']) return 0;
          return $a['name'] < $b['name'] ? -1 : 1;
        });
      }
      if (isset($_GET['sortBtnNameZ'])) {
        $sortUpLet = usort($s_list, function ($a, $b) {
          if ($a['name'] == $b['name']) return 0;
          return $a['name'] > $b['name'] ? 1 : 1;
        });
      }



     

include('footer.php');

?>