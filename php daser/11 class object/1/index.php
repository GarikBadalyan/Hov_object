<?php

class Anim{
    public $a;
    public $b;
    private $c;
    public static $people = 1;
}
$kar = new Anim();
echo $kar->a = "Armen";
echo "<br>";
echo $kar->b = 34;
echo "<br>";
echo Anim::$people;
//echo $c;
echo "<br>";
class Person{        // sa henc hxumayin tipn e
    public $age;
    public $name;
}
$obj1 = new Person();
$obj1->age = 21;
echo $obj1->age;
echo "<br>";
$obj2 = $obj1;
$obj2->age = 10;
echo $obj1->age;
echo "<br>";

class Person1{        //sa arden clonavorumn e
    public $age;
    public $name;
}
$obj1 = new Person1();
$obj1->age = 55;
echo $obj1->age;
echo "<br>";
$obj2 =clone $obj1;
$obj2->age = 60;
echo $obj2-> age;
echo "<br>";
echo $obj1->age;
echo "<br>";



?>