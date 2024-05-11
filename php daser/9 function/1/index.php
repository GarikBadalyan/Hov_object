<?php
function imAnun($name){
    echo "$name";
}
imAnun("Garik");
echo "<br>";
imAnun("Narek");
echo "<br>";
function imanunazg($anun,$azg){
    echo "im anunn e $anun: im azg e $azg";
}
imanunazg("Gar","Badalyan");
echo "<br>";
function gum($a,$b){
    return $a + $b;
}
echo gum("5","4");
echo "<br>";
function gum1(int $a1, int $b1){
    return $a1 + $b1;
}
echo gum1(32,"40 days");
echo "<br>";
function add_five(&$value) {
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;
/*
$a = "Hello";
$b = 222;
$c;
echo isset($a);// stugum e a popoxakan@ ka arjeqavorvac e te che?
echo "<br>";
echo empty($c);// stugum e cpopoxakan@ datark e te voch

*/

?>