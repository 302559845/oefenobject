<?php

class years extends Car
{
    private $years;

    public function __construct(string $name, float $price, int $km, int $years)
    {
        parent::__construct($name, $price, $km, $years);
        $this->years = $years;
    }

    /**
     * @return mixed
     */
    public function getYears()
    {
        return $this->years;
    }
}