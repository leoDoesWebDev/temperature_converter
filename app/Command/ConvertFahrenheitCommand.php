<?php

namespace App\Command;

class ConvertFahrenheitCommand extends ConvertTemperatureCommand
{
    protected static $defaultName = 'convert:fahrenheit';
    protected static $defaultDescription = 'Converts fahrenheit temperatures to a given scale.';

    public function __construct()
    {
        $this->class = 'App\Convert\Fahrenheit';
        parent::__construct();
    }
}