<?php

namespace App\Convert;

class Celsius extends Temperature{

    public function __construct(float|int $value)
    {
        parent::__construct($value);
    }


    /**
     * Convert to celsius
     *
     * @return float|int
     */
    protected function celsius():float|int
    {
        return $this->value;
    }


    /**
     * Convert to fahrenheit
     *
     * @return float|int
     */
    protected function fahrenheit():float|int
    {
        return ($this->value * 9/5) + 32;
    }


    /**
     * Convert to kelvin
     *
     * @return int|float
     */
    protected function kelvin(): float|int
    {
        return $this->value + 273.15;
    }
}
