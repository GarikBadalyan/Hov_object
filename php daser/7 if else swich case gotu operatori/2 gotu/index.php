<?php
$num = 1;
begin:
$num++;
echo "$num<br>";
if($num >= 15)goto finish;
goto begin;
finish:
?>