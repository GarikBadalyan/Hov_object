<?php


$str = "Ani, Karen, Levon, Samo";

$newArr = explode(',',$str);
echo "<pre>";
print_r($newArr);
echo "</pre>";

$newStr = implode(";",$newArr);
echo "<pre>";
print_r($newStr);
echo "<pre>";

$num = [ 33,4,32,444,5667,5543];
$tivKod = serialize($num);
echo $tivKod;
$veradardz = unserialize($tivKod);
echo "<br>";
print_r($veradardz);






?>

