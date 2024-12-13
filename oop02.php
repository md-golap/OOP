<?php

    class car{


        public $name;
        public $model;
        public $year;

        public function __construct($nameValue,$modelValue,$yearValue){

            $this->name=$nameValue;
            $this->model=$modelValue;
            $this->year=$yearValue;
        }


        public function Mycar(){
            echo "My car Name is $this->name, model is $this->model the year is $this->year";
        }


    }


    $CarObj=new Car("Motola","Prius","2019");
    $CarObj->MyCar();














?>