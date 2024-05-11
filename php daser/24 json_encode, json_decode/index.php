<?php
//В этом примере показано, как кодировать индексированный массив в массив JSON:
$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);
echo "<hr>";

//В этом примере показано, как кодировать ассоциативный массив в объект JSON
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);
echo "<hr>";
//В этом примере показано, как кодировать ассоциативный массив в объект JSON
// ete estex sax angleren tarerov en apa ays depqum normal ashxatum e ете русерен е неряевум наэл
$arr = [
        'fio'=>'Garik Badalyajn',
    'age'=>34,
    'learn'=>["HTML","CSS","Javascript","PHP"]
];
print_r($arr);// stex arrayn e tpelu
echo "<hr>";
echo json_encode($arr);//stex arden jsonn a tpelu
// анун азганун" русерени депяум
$arr1 = [
    'fio'=>'Гарик Бадалян',
    'age'=>34,
    'learn'=>["HTML","CSS","Javascript","PHP"]
];
echo "<hr>";
echo json_encode($arr1, JSON_UNESCAPED_UNICODE);
// JSON_decode()
$json111 = '{
"people":"Нарек Бадалян",
"adress":"Ленина 444",
"mob":["0934454454","09845634645"]
}';
//Функция json_decode () по умолчанию возвращает объект.
// Функция json_decode () имеет второй параметр, и если задано значение true,
// объекты JSON декодируются в ассоциативные массивы
$arr2 = json_decode($json111,true);// estex true grum enq qani vor asociacivni masivi het gorc unenq
echo "<pre>";
print_r($arr2);
echo "<pre>";
echo "<hr>";
echo $arr2["people"] . "<br>";
echo $arr2["adress"] . "<br>";

//В этом примере показано, как получить доступ к значениям из объекта PHP
echo "<hr>";
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

echo $obj->Peter . "<br>";
echo $obj->Ben . "<br>";
echo $obj->Joe . "<br>";
echo "<hr>";
//можете перебирать значения с помощью цикла foreach ()
//В этом примере показано, как перебирать значения объекта PHP:

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
echo "<hr>";
//В этом примере показано, как перебирать значения ассоциативного массива PHP

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
?>

