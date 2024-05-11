<?php

class Numbers{
    private $y;
    private $x;
    public function __construct($x)
    {
        echo "Ashxatum e konstruktor@<br>";
        $this->y = 25;
        $this->x = $x;
    }
    public function __destruct()
    {
        echo "Ashxatum e destructor@ ";
    }

    public function getX(){
        return $this->y;
    }
    public function getY(){
        return $this->x;
    }
}
$obj = new Numbers(3345);
echo $obj->getY() . "<br>";
echo $obj->getX() ."<br>";



?>