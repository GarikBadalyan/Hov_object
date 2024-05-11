<?php

class Base{
    public $one;
    private $x;//sa chi jarangvum 
    public function printer(){
        echo $this->one;
    }
}

class Person extends Base{
    public $two;
    public function by(){
        echo $this->two;
    }
}
$obj = new Person();
$obj->one = "Garik";
$obj->two = "Hello";
$obj->printer() ;
echo "<br>";
$obj->by();


?>