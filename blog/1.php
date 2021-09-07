<?php
include('header.php'); ?>

<?php

$s_list = [
    ['name' => 'PHP 7', 'img' => 'img/1.jpg', 'date' => date("d.M.Y", '1496188800')],
    ['name' => 'Компьютер глазами хакера', 'img' => 'img/2.jpg',  'date' => date("d.M.Y", '1355702400')],
    ['name' => 'PHP и MySQL. Разработка веб-приложений', 'img' => 'img/3.jpg',  'date' => date("d.M.Y", '1467158400')],
];
   
    $sortUpLet = usort($s_list, function($a, $b){
        if($a['name'] == $b['name']) return 0;
        return $a['name'] > $b['name'] ? 1 : 1;  
    });
    var_dump($s_list);
    echo '<br>';
    $sortDownLet = usort($s_list, function($a, $b){
        if($a['name'] == $b['name']) return 0;
        return $a['name'] < $b['name'] ? -1 : 1;   
    });   
    var_dump($s_list);
    echo '<br>';
    $sortUpDate= usort($s_list, function($a, $b){
        if($a['data'] == $b['date']) return 0;
        return $a['date'] > $b['date'] ? -1 : 1;   
    });  
    var_dump($s_list);
    echo '<br>';
    $sortDownDate = usort($s_list, function($a, $b){
        return $a['date'] <=> $b['date'];   
    });  
    var_dump($s_list);
    echo '<pre></pre>';
    echo '<pre></pre>';
    echo '<pre></pre>';
    echo '<pre></pre>';

    $s_list = [
        ['name' => 'PHP 7', 'img' => 'img/1.jpg', 'date' => date_create_from_format('j-M-Y', '31-May-2017')],
        ['name' => 'Компьютер глазами хакера', 'img' => 'img/2.jpg',  'date' => date_create_from_format('j-M-Y', '29-Jun-2016')],
        ['name' => 'PHP и MySQL. Разработка веб-приложений', 'img' => 'img/3.jpg',  'date' => date_create_from_format('j-M-Y', '17-Dec-2012')],
    ];
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    
    var_dump($date);

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
       
        $sortUpLet = usort($s_list, function($a, $b){
            if($a['name'] == $b['name']) return 0;
            return $a['name'] > $b['name'] ? 1 : 1;  
        });
        var_dump($s_list);
        echo '<br>';
        $sortDownLet = usort($s_list, function($a, $b){
            if($a['name'] == $b['name']) return 0;
            return $a['name'] < $b['name'] ? -1 : 1;   
        });   
        var_dump($s_list);
        echo '<br>';
        $sortUpDate= usort($s_list, function($a, $b){
            if($a['date'] == $b['date']) return 0;
            return $a['date'] > $b['date'] ? 1 : 1;   
        });  
        var_dump($s_list);
        echo '<br>';
        $sortUpDate= usort($s_list, function($a, $b){
            
            return $a['date'] < $b['date'] ? -1 : 0;     
        });  
        var_dump($s_list);
        
?>
<?php include('footer.php'); ?>