<?php

    class Car {
        // [public, private, protected (hak akses / access modified)]
        // property
        public $brand;
        public $color;

        // method
        function getBrand() {
            return $this->brand;
        }
        function getColor() {
            return $this->color;
        }

    }

    // Object
    $landcruiser = new Car();
    $landcruiser->color = "Red";
    $byd = new Car(); 
    $byd->color = "Blue";


    // Setter
    $landcruiser->brand = "Land Cruiser";
    $byd->brand = "BYD";

    // Echo
    echo $landcruiser->getBrand();
    echo $landcruiser-> getColor();
    echo '<br>';
    echo $byd->getBrand();
    echo $byd-> getColor();
    echo '<br>';

?>