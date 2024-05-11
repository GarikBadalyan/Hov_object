<?php


$a = "Hello";
$b = 222;
$c;
$k = 12.34;
echo isset($a);// Проверьте, существует ли переменная и не равна ли она нулю
echo "<br>";
echo empty($c);// Проверить, пусто ли выражение " " , "0" , "null" , false
echo "<br>";
if(isset($a)){
    echo "ka ays popoxakan@" . "<br>";
}
if(empty($c)){
    echo "chka ays popoxakan@";
}
echo "<br>";
echo gettype($c);
echo "<br>";
echo gettype($b);
echo "<br>";
echo gettype($a);
echo "<br>";
echo gettype($k);
echo "<br>";
echo is_int($b);//aysinqn stugum e ka ardyoq b popoxakan vor@ integer e aysinqn amboxj tiv e
                // veradarcnum e 1 kam vochinch

echo "<br>";
echo is_int($c)



?>