<?php 

abstract class Vehicle {

    var $make;
    var $model;
    var $year;
    var $mileage;
    var $price;
    var $image;

}

class Car extends Vehicle{

    function __construct($make, $model, $year, $mileage, $price, $image) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->mileage = $mileage;
        $this->price = $price;
        $this->image = $image;
    }
}

class Truck extends Vehicle {
    function __construct($make, $model, $year, $mileage, $price, $image, $engine) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->mileage = $mileage;
        $this->price = $price;
        $this->image = $image;
        $this->engine = $engine;
    }

    var $engine;
}

$vehicle1 = new Car("Astro", "Estrella", "2021", 500, 50000, "veh-01.jpg");
$vehicle2 = new Car("Terraza", "Spinneo", "2020", 30000, 31000, "veh-02.jpg");
$vehicle3 = new Car("Sage", "Ecostar", "2014", 70000, 15000, "veh-03.jpg");
$vehicle4 = new Truck("Hauler", "Lion", "2021", 200, 40000, "veh-04.jpg", "diesel");

$vehicles = array($vehicle1, $vehicle2, $vehicle3, $vehicle4);
?>