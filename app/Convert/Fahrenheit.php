<?php

namespace App\Convert;

class Fahrenheit extends Temperature {

    public function __construct(float|int $value)
    {
        parent::__construct($value);
    }


    /**
     * Convert to celsius
     *
     * @return int|float
     */
    protected function celsius():float|int
    {
        return ($this->value * 9/5) + 32;
    }


    /**
     * Convert to fahrenheit
     *
     * @return int|float
     */
    protected function fahrenheit():float|int
    {
        return $this->value;
    }
}
