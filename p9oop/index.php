<?php

class Shape {
    protected string $name = "Shape";

    public function draw(): string {
        return "Drawing a $this->name";
    }
}

class Rectangle extends Shape {
    protected string $name = "Rectangle";

    public function draw(): string {
        return "Drawing a $this->name";
    }
}

class Square extends Shape {
    protected string $name = "Square";

    public function draw(): string {
        return "Drawing a $this->name";
    }
}

$shape = new Shape();
$square = new Square();
$rectangle = new Rectangle();

echo $shape->draw() . PHP_EOL;
echo $square->draw() . PHP_EOL;
echo $rectangle->draw() . PHP_EOL;
