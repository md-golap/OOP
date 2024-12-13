<?php

    class DailyAccount{


        public function __construct(public $deposit){}
        private $items = [];
        private $total = 0;

        function addItem ($name, $cost){
            $this->total+=$cost;

            if($this->total > $this ->deposit){
                echo "You don't have enough balance. \n";

                $this ->total -= $cost;
                    return;
            }

            $this -> items [$name] = $cost;
        }

        function createReport(){

            echo "Initial Deposit was {$this ->deposit}.\n";

            foreach($this->items as $name=>$cost){
                echo "{$name}-{$cost} \n";
            }

            echo "--------------------------------------\n";
            echo "total : {$this->total}\n";
            echo "Balance:".($this->deposit - $this->total) . "\n";
        }

    }



$dailyAccount = new DailyAccount(1000);
$dailyAccount ->addItem("kachaMoris" , 66);
$dailyAccount ->addItem("chal" , 54);
$dailyAccount ->addItem("dim" ,444);
$dailyAccount ->createReport();



?>