<?php
function recursia($tiv){

    if($tiv>10){
    echo ($tiv--) . "<br>";
    recursia($tiv);
    }else return;// kam exit()
}
    recursia(15);


?>