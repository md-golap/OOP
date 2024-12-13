<?php

    class MileageCalculator{

        public $pricePerLiter;
        public $distance;
        public $totalFuelPrice;

        function calculateKMPL(){

            $totalFuel = $this->totalFuelPrice/$this->pricePerLiter;

            $mileage = $this->distance/$totalFuel;

            echo "The mileage of the vehicle {$mileage}. \n";

        }
    }


   $motorcycle = new MileageCalculator();

   $motorcycle -> pricePerLiter=123;
   $motorcycle -> distance=450;
   $motorcycle -> totalFuelPrice=543;
   $motorcycle -> calculateKMPL();

   $motorcycle = new MileageCalculator();

















?>