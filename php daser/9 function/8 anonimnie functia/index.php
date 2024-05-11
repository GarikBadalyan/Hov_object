<?php

$som = function (...$arr){
    foreach($arr as $val){
        echo $val . "<br>";
    }
};
$som(23,44,5,66,7,888,777);

?>