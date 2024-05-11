<?php

class Person{
    private $one= [];
    public function __get($key)
    {
        if(array_key_exists($key,$this->one)){
            return$this->one[$key];
        }else{
            return null;
        }
    }
    public function __set($key, $value)
    {
       $this->one[$key] = $value;
    }
}

$obj = new Person();
$obj->text = "Test text!!! <br>";
$obj->name = "Andrey!!! <br>";
echo $obj->text . "<br>";
echo $obj->name . "<br>";
echo "<pre>";
print_r($obj);
echo "<pre>";


?>