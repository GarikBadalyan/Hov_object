<?php
//В PHP есть следующие функции для проверки целочисленного типа переменной:
//is_int ()
//is_integer () - псевдоним is_int ()
//is_long () - псевдоним is_int ()

//Проверьте, является ли тип переменной целым числом:
$x = 5985;
var_dump(is_int($x));
echo "<br>";
$x = 59.85;
var_dump(is_int($x));
echo "<br>";
//Проверьте, является ли тип переменной float:
$x1 = 10.365;
var_dump(is_float($x1));
echo "<br>";
//Проверьте, является ли числовое значение конечным или бесконечным:
$x2 = 1.9e411;
var_dump($x2);
echo "<br>";
//Неверный расчет вернет значение NaN:
$x3 = acos(8);
var_dump($x3);
echo "<br>";
//Проверьте, является ли переменная числовой:
$x4 = 5985;
var_dump(is_numeric($x4));
echo "<br>";
$x5 = "5985";
var_dump(is_numeric($x5));
echo "<br>";
$x6 = "59.85" + 100;
var_dump(is_numeric($x6));
echo "<br>";
$x7 = "Hello";
var_dump(is_numeric($x7));
echo "<br>";

// Cast float to int
$x8 = 23465.768;
$int_cast = (int)$x8;
echo $int_cast;

echo "<br>";

// Cast string to int
$x9 = "23465.768";
$int_cast = (int)$x9;
echo $int_cast;
?>
