<?php

$mess = ' text minchev functiai stexcum@ <br>';
$test = function (array $some) use ($mess){
    if(isset($some) && count($some) > 0){
        echo  $mess;
        foreach ($some as $el){
            echo $el . "<br>";
        }
    }
};
$test([33,44,55]);
$mess = "poxum enq arjeq@";
$some = [3333333,4444444,5555555555,6666666];
$test($some);

?>