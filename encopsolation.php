<?php
class Crdit{
    private $amount = 0;
    public function increase($value){
        $this->amount += $value;
    }
    public function decrease($value){
        if($value <$this->amount){
            $this->amount -= $value;
        }
        else{
            die("You dont have enghue Cridit...!");
        }
    }
    public function getCrdit(){
        return $this->amount;
    }
}


$test = new Crdit();
$test->increase(400);
$test-> decrease(200);
echo $test->getCrdit();







?>