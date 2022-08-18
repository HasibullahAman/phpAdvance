<?php
/*always came tow (__) in magical methods
we have Three type of magical methods :
__construct
__destuct
__set and __get
*/

class Phone{
    private $variable = array();

    public function __set($name,$values) {
        $this->variable[$name]=$values;
    }
    public function __get($name){
        return $this->variable[$name];
    }
}


$phone = new Phone();
$phone->color="red";
echo $phone->color;


?>