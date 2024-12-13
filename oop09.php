<?php

    class  calculateHour{



      public  function __construct(public $pricePerLiter,public $workHour,public $totalDieselPrice) {
       
      
      }
      function hourHPL(){

        $totalDiesel = $this-> totalDieselPrice/$this-> pricePerLiter;
        $timeAge = $this-> workHour/$totalDiesel;

          $hours = floor($timeAge/60);
          $remainingMinutes = $timeAge % 60;

          echo "$hours hours and $remainingMinutes minutes";

      }

    }

$machine = new calculateHour (120,345,500);
$machine -> hourHPL ();







    

?>