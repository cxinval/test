<?php
    $b_list = $_POST['search'];
    $s_list = ['b_1'=> ['name'=> 'php7', 'date' => '31 мая 2017'], 
               'b_2'=> ['name'=>'Компьютер глазами хакера', 'date' => '17 декабря 2012'], 
               'b_3'=> ['name'=>'PHP и MySQL. Разработка веб-приложений', 'date'=>'29 июня 2016']];
foreach ($s_list as $key => $value)

if ($b_list === $s_list['$value']) {
    echo "да";
}else {
    echo "ytn";
}