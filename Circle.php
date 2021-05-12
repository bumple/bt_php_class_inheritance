<?php

class Circle
{
    public string $name;
    public string $radius;
    public string $color;

    public function __construct(string $name, int $radius, string $color)
    {
        $this->name = $name;
        $this->radius = $radius;
        $this->color = $color;
    }

    public function calculatePerimeter(): int
    {
        return 2 * $this->radius * M_PI;
    }

    public function calculateArea(): int
    {
        return pow($this->radius, 2) * M_PI;
    }

    public function toString($int): string
    {
        return strval($int);
    }
}
