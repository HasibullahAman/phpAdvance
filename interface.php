<?php
interface Car{
    public function getName($value);
    public function getSpeed($value);
}


// calss Benz implements Car{
//     public $name;
//     public $speed;

//     public function getName($value){
//         $this->name=$value;
//         return true;
//     }
//     public function getSpeed($value){
//         $this->speed=$value;
//         return true;
//     }
//     pbulic function getinfo(){
//         return $this->name. ":".$this->speed;
//     }
// }

// $Benz = new Benz();
// $Benz->getName('Benz S500');
// $Benz->getSpeed('300');
// echo Benz->getinfo();


?>