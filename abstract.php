<?php
abstract class shape{
    abstract protected function getcolor();
    abstract protected function setcolor($color);

    public function describe(){
        return ('i am a: '.$this->getcolor().get_class($this));
    }
}
class triangle extends shape{

    private $color = null;
    public function getcolor(){
        return $this->color;
    }
    public function setcolor($color){
        $this-> color=$color;
    }
}
$Triangle = new triangle();
$Triangle -> setcolor('yello');
print $Triangle->describe();
?>