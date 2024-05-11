<?php
//define(name, value, case-insensitive)
//Параметры:
//name : указывает имя константы
//значение : указывает значение константы
//Без учета регистра : указывает, должно ли имя константы быть без учета регистра. По умолчанию false

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo "<br>";
define("APER",45,true);
echo aper;
echo "<br>";
echo defined("aper");
//В этом примере константа используется внутри функции, даже если она определена вне функции:
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
    echo GREETING;
}
echo "<br>";
myTest();
echo "<br>";
echo __FILE__;
echo "<br>";
echo PHP_VERSION;
echo "<br>";
echo __DIR__;

?>
