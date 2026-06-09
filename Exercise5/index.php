<?php
abstract class Shape
{
    abstract public function calculateArea(): float;
}
class Circle extends Shape
{
    public function __construct(private float $radius) {}
    #[Override]
    public function calculateArea(): float
    {
        return pi() * pow($this->radius, 2);
    }
}
class Rectangle extends Shape
{
    public function __construct(protected float $width, protected float $height) {}
    #[Override]
    public function calculateArea(): float
    {
        return $this->width * $this->height;
    }
}
class Square extends Rectangle
{
    public function __construct(float $side)
    {
        parent::__construct($side, $side);
    }
}

$shaps = [new Circle(5), new Rectangle(4, 5), new Square(5)];

foreach ($shaps as $shap) {
    echo "Shape type :" . get_class($shap) . "| Area :" . round($shap->calculateArea(), 2) . "\n";
}
