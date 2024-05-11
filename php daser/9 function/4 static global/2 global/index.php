<?php


function test(){
    global $x;
    $x = 22;
    return $x;
}

$x = 345;
echo test() . "<br>";
echo $x
?>