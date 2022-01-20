<?php

namespace App\Commands;

class ConvertKelvinCommand extends ConvertTemperatureCommand
{
    protected static $defaultName = 'convert:kelvin';
    protected static $defaultDescription = 'Converts kelvin temperatures to a given scale.';

    public function __construct()
    {
        $this->class = 'App\Convert\Kelvin';
        parent::__construct();
    }
}