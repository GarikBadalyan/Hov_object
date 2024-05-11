<?php
//while - перебирает блок кода, пока выполняется указанное условие
//do...while - проходит через блок кода один раз, а затем повторяет цикл до тех пор, пока указанное условие выполняется
//for - перебирает блок кода указанное количество раз
//foreach - перебирает блок кода для каждого элемента в массиве

$x = 1;

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
echo "<br>";
// do...whileПетля всегда будет выполнять блок кода один раз, он будет проверять состояние и повторить цикл , пока заданное условие истинно
$y = 1;
do {
    echo "The number is: $y <br>";
    $y++;
} while ($y <= 5);
echo "<br>";

for($a = 2;$a<=10;$a+=2){
    echo "1-ic 10 tveri zuyger@: $a <br>";
}
echo "<br>";
$arr = ["red","green","blue","cyan"];

foreach ($arr as $item){
    echo "$item <br>";
}
$arr1 = ["Nar"=>"34","Ben"=>"30","Ahar"=>"22"];
foreach ($arr1 as $elem=> $val){
    echo "$elem-$val <br>";
}

echo "<br>";
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "The number is: $x <br>";
}
echo "<br>";
for ($x = 0; $x < 6; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>";
}
echo "<br>";








/*
$a = "Hello";
$b = 222;
$c;
echo isset($a);// stugum e a popoxakan@ ka arjeqavorvac e te che?
echo "<br>";
echo empty($c);// stugum e cpopoxakan@ datark e te voch

*/

?>