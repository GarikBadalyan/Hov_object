<?php
$people = [
    "Armen"=>["age"=>30,"qash"=>70],
    "Karen"=>["age"=>45,"qash"=>50],
    "Narek"=>["age"=>34,"qash"=>68]
];
echo "<pre>";
print_r($people);
echo "</pre>";

echo "<br>";

echo "<pre>";
print_r($people['Armen']);
echo "</pre>";

echo "<br>";

echo "<pre>";
print_r($people['Armen']['qash']);
echo "</pre>";//kam karox enq ays tarberak@ grel

echo "<br>";
echo $people["Karen"]["qash"];
?>