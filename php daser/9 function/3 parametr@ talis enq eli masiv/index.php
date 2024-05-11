<?php


//parametreri qanak@ haytni che
function hashiv(...$elem){
    foreach ($elem as $val){
        echo $val . "<br>";
    }
}

//hashiv("Narek","Garik","Armen","Karen");
$tver = [3,4,55,6,77,8,8,88,5443532,535,35,546,456,456,567,67];
hashiv(...$tver);
?>