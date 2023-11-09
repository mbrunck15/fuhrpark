<?php

spl_autoload_register(function ($className) {
    include 'class/' . $className . '.php';
});

//
//$rad=new Fahrraeder(1,6);
//$auto=new Autos(123,321,'B-B123',75,5,);
//$laster=new LKW(456,654,'B-B23',100,250);
//$mopet=new Motorraeder(789,987,'B-W258',12,2,30);
//$rik=new ERickschas(4,2,12);
//
//echo '<pre>';
//print_r($rad);
//echo '</pre>';
//echo '<pre>';
//print_r($auto);
//echo '</pre>';
//echo '<pre>';
//print_r($laster);
//echo '</pre>';
//echo '<pre>';
//print_r($mopet);
//echo '</pre>';
//echo '<pre>';
//print_r($rik);
//echo '</pre>';

$a=new Fuhrpark();
$a->erstelletestdaten();
echo '<pre>';
print_r($a);
echo '</pre>';



?>
