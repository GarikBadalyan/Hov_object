<?php
$a1 = [1,3,"4",5,7];

if(in_array(4,$a1)){
    echo "tiv 4 -@ ka masivi mej";
}else{
    echo "tiv 4-@ chka masivi mej";
}
echo "<br>";
if(in_array(4,$a1,true)){
    echo "tiv 4 -@ ka masivi mej";
}else{
    echo "tiv 4-@ chka masivi mej";
}


?>