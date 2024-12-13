<?php


 class DailyAccount{

    public function __construct(public $deposit){}

    public $items = [];
     function addItems($name,$cost){
         $this->items[$name]=$cost;
    }

    function createReport(){
       echo "Initial deposit was {$this->deposit}.\n";
       foreach ($this->items as $name=>$cost) {
         echo "{$name} - {$cost}.\n";
       }

    }
    
 }



   $DailyAccount = new dailyAccount(1000);
   $DailyAccount->addItems("dim",120);
   $DailyAccount->createReport();









?>