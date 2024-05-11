<?php
function factorial($tiv)
{

    if ($tiv <= 1) {
        return 1;
    }else
    return $tiv * factorial($tiv - 1);
}
echo factorial(5);
?>