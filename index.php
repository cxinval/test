<?php include('blog/header.php'); ?>
<main>
  <div class="container">
    <div class="mb-3 l_search mb-5">
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <form action="blog/books_search.php" method="POST" class="d-flex form_list">
            <input class="form-control me-2" list="list" type="search" placeholder="Что ищем?" name="b_search">
            <input class="btn btn-outline-success" type="submit" placeholder="Поиск" value="Поиск">
            <datalist id="list">
              <option value="php7">
              <option value="Компьютер глазами хакера">
              <option value="PHP и MySQL. Разработка веб-приложений">
            </datalist>
          </form>
        </div>
      </nav>
    </div>
    <div class="main-wrap">

      <?php
      $b_list = $_POST['b_search'];
      $s_list = [
        'b_1' => ['name' => 'php7', 'img' => 'img/1.jpg', 'date' => '31 мая 2017'],
        'b_2' => ['name' => 'Компьютер глазами хакера', 'img' => 'img/2.jpg',  'date' => '17 декабря 2012'],
        'b_3' => ['name' => 'PHP и MySQL. Разработка веб-приложений', 'img' => 'img/3.jpg',  'date' => '29 июня 2016']
      ];
        for($i = 0; $i < 3; $i++):
      ?>    
        <div class="col-3 text-center card">
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm book-block">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal book__title"><?php?></h4>
                <img class="book-img" src="img/1.jpg" alt="" />
                <span class="book__year">Год издания: 31 мая 2017</span>
              </div>
              <div class="card-body">
                <button type="button" class="w-100 btn btn-lg btn-outline-primary"> Подробней </button>
              </div>
            </div>
          </div>
        </div>
      <?php endfor?>
    </div>
  </div>
</main>
<?php include('blog/footer.php'); ?>