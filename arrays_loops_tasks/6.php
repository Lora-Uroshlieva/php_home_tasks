<?php
//Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en,
// а русские — в массив $ru.
// $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
// $en = array('green', 'red','blue'); $ru = array('зеленый', 'красный', 'голубой');

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = [];
$ru = [];
foreach ($arr as $key => $value) {
    $en[] = $key;
    $ru[] = $value;
}

var_dump($en);
var_dump($ru);