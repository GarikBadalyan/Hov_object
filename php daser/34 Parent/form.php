<?php


class Base{
    public function stars(){
        echo "cnox class <br>" ;
    }
}
class Second extends Base{
    public function stars()
    {
        parent::stars();
        echo "axchik class" ;
    }
}
$obj = new Second();
$obj->stars();


?>