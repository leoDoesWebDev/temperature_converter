<?php

namespace App\Convert;

abstract class Temperature{

    protected float|int $value;

    /**
     * Construct temperature object with value
     *
     * @param  float|int  $value
     */
    public function __construct(float|int $value)
    {
        $this->value = $value;
    }


    /**
     * Convert temperature to given scale
     *
     * @param $scale
     * @return int|float
     */
   function convertTo($scale): float|int
   {
        return call_user_func([$this, $this->lookUpScaleFullForm($scale)]);
    }


    /**
     * Convert to celsius
     *
     * @return int|float
     */
    protected abstract function celsius():int|float;


    /**
     * Convert to fahrenheit
     *
     * @return int|float
     */
    protected abstract function fahrenheit():int|float;


    /**
     * Convert to kelvin
     *
     * @return int|float
     */
    protected abstract function kelvin():int|float;



    /**
     * Looks up full form of abbreviated scale
     *
     * @param $scale
     * @return string
     */
    public function lookUpScaleFullForm($scale): string
    {
        $scale = strtolower($scale);
        $scales = [
            'c' => 'celsius',
            'f' =>  'fahrenheit',
            'k' =>  'kelvin',
        ];

        return $scales[$scale];
    }
}
