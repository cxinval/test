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
        </div>
      </nav>
    </div>
    <div class="main-wrap">

      <?php
      $b_search = $_POST['b_search'] ?? null;
      $s_list = [
        ['name' => 'PHP 7', 'img' => 'img/1.jpg', 'date' => '31 мая 2017'],
        ['name' => 'Компьютер глазами хакера', 'img' => 'img/2.jpg',  'date' => '17 декабря 2012'],
        ['name' => 'PHP и MySQL. Разработка веб-приложений', 'img' => 'img/3.jpg',  'date' => '29 июня 2016']
      ];
      foreach ($s_list as $key => $value) :
        if (!$b_search || $b_search === $value['name']) { ?>
          <div class="col-3 text-center card">
            <div class="col">
              <div class="card mb-4 rounded-3 shadow-sm book-block">
                <div class="card-header py-3 ">
                  <h4 class="my-0 fw-normal book__title"><? echo $value['name'] ?></h4>
                  <img class="book-img" src="<? echo $value['img'] ?>" alt="" />
                  <span class="book__year"><? echo $value['date'] ?></span>
                  <div class="card-body">
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary"> Подробней </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php }
      endforeach; ?>
    </div>
  </div>
</main>
<?php include('blog/footer.php'); ?>