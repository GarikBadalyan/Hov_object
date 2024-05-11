<?php
include 'second.php';
echo "<br>";
//require  'second.php'
$a = 5;

$b = 6.5;
$x = "aaa";
$y = true;
$arr1 = [12,"eee",true];
$arr2 = ["koshelyok"=>200, "konvert"=>'kursayin','chexol'=> false];

//echo "Hello World!!!!!!!!";

var_dump($a + $b);
echo "<br>";
var_dump($b + $a);
echo "<br>";
var_dump($x * $a);
echo "<br>";
var_dump($x * $y);
echo "<br>";
var_dump($arr1);
echo "<br>";
var_dump($arr2);
echo "<br>";
$num = 12;
$str1 = "Hello - $num";
$str2 =  ' Hello - $num ';
$str3 = "Hello - \$num";
echo $str1;
echo "<br>";
echo $str2;
echo "<br>";
echo $str3;
$str4 = 'hello - \'35\'';
echo "<br>";
echo $str4;
?>