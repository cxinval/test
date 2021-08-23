<?php
    $b_list = $_POST['b_search'];
    $s_list = ['b_1'=> ['name'=> 'php7', 'date' => '31 мая 2017'], 
               'b_2'=> ['name'=>'Компьютер глазами хакера', 'date' => '17 декабря 2012'], 
               'b_3'=> ['name'=>'PHP и MySQL. Разработка веб-приложений', 'date'=>'29 июня 2016']];


foreach ($s_list as $keys){
}
if ($b_list == $s_list['b_1']['name']) {
    header('Location: b_1.php');
}elseif ($b_list == $s_list ['b_1']['date']) {
    header('Location: b_1.php');
}elseif ($b_list == $s_list['b_2']['name']) {
    header('Location: b_2.php');
}elseif ($b_list == $s_list ['b_2']['date']) {
    header('Location: b_2.php');
}elseif ($b_list == $s_list ['b_3']['name']) {
    header('Location: b_3.php');
}elseif ($b_list == $s_list ['b_3']['date']) {
    header('Location: b_3.php');
}else {
    echo "Книга не найдена!";
}








    


