<?php
class Fund{
    private $fund;
    public function __construct($initaialFund = 0){
        $this->fund= $initaialFund;
    }
    function addFund($money){
        $this->fund += $money;
    }
    function deductFund($money){
        $this->fund -= $money;
    }
    public function getTotal(){
        echo "total fund is {$this->fund}\n";
    }
}

$ourFund = new Fund();
// $ourFund->fund= 40;
$ourFund->addFund(100);
$ourFund->getTotal();
$ourFund->deductFund(50);
$ourFund->getTotal();