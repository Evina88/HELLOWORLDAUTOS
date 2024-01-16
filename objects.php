<?php 

class Vehicle {

    function __construct($make, $model, $year, $mileage, $price, $image) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->mileage = $mileage;
        $this->price = $price;
        $this->image = $image;
    }

    var $make;
    var $model;
    var $year;
    var $mileage;
    var $price;
    var $image;
}

$vehicle1 = new Vehicle("Astro", "Estrella", "2021", 500, 50000, "veh-01.jpg");
$vehicle2 = new Vehicle("Terraza", "Spinneo", "2020", 30000, 31000, "veh-02.jpg");
$vehicle3 = new Vehicle("Sage", "Ecostar", "2014", 70000, 15000, "veh-03.jpg");

$vehicles = array($vehicle1, $vehicle2, $vehicle3);
?>