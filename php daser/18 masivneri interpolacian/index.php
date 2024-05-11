<?php

$arr = [2,4,67,8,9,11];
echo "hima jam aravotyan $arr[5] e";
$zang = ["name"=>"Narek","age"=>34,"azganun"=>"Badalyan"];
echo "<br>";
echo "Nareki tariqn e $zang[age]";

$people = [
    "Armen"=>["age"=>30,"qash"=>70],
    "Karen"=>["age"=>45,"qash"=>50],
    "Narek"=>["age"=>34,"qash"=>68]
];
echo "<br>";
echo "Karen@ kshrum e {$people[Karen]['qash']} kg.";

?>