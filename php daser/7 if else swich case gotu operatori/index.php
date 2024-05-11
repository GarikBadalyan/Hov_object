<?php
//Выход "Доброго дня!" если текущее время (HOUR) меньше 20:
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}
echo "<br>";
//Выход "Доброго дня!" если текущее время меньше 20, и «Спокойной ночи!» иначе:
$k = date("H");

if ($k < "1") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";
$a = date("H");

if ($a < "10") {
    echo "Have a good morning!";
} elseif ($a < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

$favcolor = "red";
echo "<br>";
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}









/*
$a = "Hello";
$b = 222;
$c;
echo isset($a);// stugum e a popoxakan@ ka arjeqavorvac e te che?
echo "<br>";
echo empty($c);// stugum e cpopoxakan@ datark e te voch

*/

?>