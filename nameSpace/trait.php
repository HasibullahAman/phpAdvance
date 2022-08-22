<?php
// We can introduce functions one and used that method in multiple class


trait math{
    public function add($a,$b){
        return $a+$b;
    }
}

class add{
    use math;
}

$sum = new add();
echo $sum->add(3,2);










