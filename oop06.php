<?php
    
    class MileageCalculator{

            public $pricePerLiter;
            public $distance;
            public $totalFuelPrice;

            function calculateKMPL(){
                $totalFuel = $this->totalFuelPrice/$this->pricePerLiter;

                $mileage = $this->distance/$totalFuel;
                echo "The mileage of the vehicle is {$mileage}KMPL.\n";
            }
    }



  $motorcycle = new MileageCalculator();
  $motorcycle -> pricePerLiter=100;
  $motorcycle -> distance= 100;
  $motorcycle -> totalFuelPrice=500;
  $motorcycle -> calculateKMPL();

  $motorcycle = new MileageCalculator();
  



?>