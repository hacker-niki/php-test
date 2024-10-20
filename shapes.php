<?php

interface Shape {
    public function calculateArea(): float;
}

class Circle implements Shape {
    protected $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function calculateArea(): float {
        return pi() * pow($this->radius, 2);
    }
}

class Square implements Shape {
    protected $width;

    public function __construct(float $width) {
        $this->width = $width;
    }

    public function calculateArea(): float {
        return pow($this->width, 2);
    }
}

class Rectangle extends Square {
    protected $height;

    public function __construct(float $width, float $height) {
        parent::__construct($width);
        $this->height = $height;
    }

    public function calculateArea(): float {
        return $this->width * $this->height;
    }
}

// Пример испоьзования
/*
$shapes = [
    new Circle(5),
    new Square(4),
    new Rectangle(3, 6),
];

foreach ($shapes as $shape) {
    echo 'Площадь фигуры: ' . $shape->calculateArea() . "\n";
}
*/
