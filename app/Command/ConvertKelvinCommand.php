<?php

namespace App\Command;

class ConvertKelvinCommand extends ConvertTemperatureCommand
{
    protected static $defaultName = 'convert:kelvin';
    protected static $defaultDescription = 'Converts kelvin temperatures to a given scale.';
    protected string $class;

    public function __construct()
    {
        $this->class = 'App\Convert\Kelvin';
        parent::__construct();
    }
}