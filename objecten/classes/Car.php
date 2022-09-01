<?php

class Car
{
private $name;
private $price;
private $km;

function __construct(string $name, float $price, int $km){
    $this->name= $name;
    $this->price= $price;
    $this->km= $km;

}

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getKm(): int
    {
        return $this->km;
    }
}
?>