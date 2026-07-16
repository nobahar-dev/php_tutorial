<?php

class Car {
    private string $brand;
    private string $model;
    private string $color;

    public function __construct($brand, $model, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        echo "New Car Created...! <br>";
    }

    public function getInformation(): string {
        return "Color: $this->color, Model: $this->model, Brand: $this->brand";
    }

    public function __destruct() {
        echo "The Car has been destructed...!";
    }
}

$car = new Car("BMW", "X6", "Blue");
echo $car->getInformation(), "<br>";
