<?php

    class Person{

        public $name;
        public $age;

        function introduce(){
            echo "My name is {$this->name} and my age is {$this->age}.";
        }
    }

    $PgrObj = new Person();
        $PgrObj -> name ="golap";
        $PgrObj-> age = 33;

    $PgrObj->introduce();












?>