<?php

class Family{
private $boy;
private $girl;
public function setNameBoy($txa){
   $this->boy = $txa;
}
public function setNameGirl($axchik){
    $this->girl = $axchik;
}
public function getNameBoy(){
    return $this->boy;
}
public function getNameGirl(){
    return $this->girl;
}
public  function freind(){
    return $this->getNameBoy() . " " . $this->getNameGirl();
}
};
$family = new Family();
$family->setNameBoy("Armen");
$family->setNameGirl("Anna");
echo $family->freind();




?>