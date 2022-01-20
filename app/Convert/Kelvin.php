<?php

namespace App\Convert;

class Kelvin extends Temperature {

    public function __construct(float|int $value)
    {
        parent::__construct($value);
    }

    /**
     * Convert to kelvin
     *
     * @return int|float
     */
    protected function kelvin(): float|int
    {
        return $this->value;
    }


    /**
     * Convert to celsius
     *
     * @return int|float
     */
    protected function celsius():float|int
    {
        return $this->value - 273.15;
    }


    /**
     * Convert to fahrenheit
     *
     * @return int|float
     */
    protected function fahrenheit():float|int
    {
        return ($this->value - 273.15) * 9/5 + 32;
    }
}
