<?php include('blog/header.php'); ?>
<main>
  <div class="container">
    <div class="mb-3 l_search mb-5">
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid search_btn">
          <form action="" method="POST" class="d-flex form_list">
            <input class="form-control me-2" list="list" type="search" placeholder="Что ищем?" name="b_search">
            <input class="btn btn-outline-success" type="submit" placeholder="Поиск" value="Поиск">
            <datalist id="list">
              <option value="PHP 7">
              <option value="Компьютер глазами хакера">
              <option value="PHP и MySQL. Разработка веб-приложений">
            </datalist>
          </form>
          <form class='form-sort' action="" method="POST">
            <input class="btn btn-outline-dark add_btn sort__btn" name="sort__btn2" type="submit" value="Имя" />
            <input class="btn btn-outline-dark add_btn sort__btn" name="sort__btn3" type="submit" value="Дата" />
          </form>
        </div>
      </nav>
    </div>
    <div class="main-wrap">

      <?php

      $s_list = [
        ['name' => 'PHP 7', 'img' => 'img/1.jpg', 'date' => '31 мая 2017'],
        ['name' => 'Компьютер глазами хакера', 'img' => 'img/2.jpg',  'date' => '17 декабря 2012'],
        ['name' => 'PHP и MySQL. Разработка веб-приложений', 'img' => 'img/3.jpg',  'date' => '29 июня 2016'],
      ];
      if (isset($_POST['sort__btn2'])) {
        arsort($s_list);
      }
      if (isset($_POST['sort__btn3'])) {
        sort($s_list);
      }

      if (!empty($_POST) && isset($_POST['addNameBook']) && isset($_POST['addDateBook'])) {
        $s_list[] = ['name' => $_POST['addNameBook'], 'img' => 'img/3.jpg', 'date' => $_POST['addDateBook']];
      }
      
      
      ?>
      <a href="blog\add.php" class="btn btn-outline-dark add_btn">Добавить свое</a>
    </div>
</main>
<?php include('blog/footer.php'); ?>


<!-- <div class="cards">
  <div class="card-main">
    <h4 class="my-0 fw-normal book__title card__title"><? echo $value['name'] ?></h4>
    <img class="book-img" src="<? echo $value['img'] ?>" alt="" />
    <span class="book__year"><? echo $value['date'] ?></span>
    <div class="card-body">
      <button type="button" class="w-100 btn btn-lg btn-outline-primary btn_card"> Подробней </button>
    </div>
  </div>
</div> -->