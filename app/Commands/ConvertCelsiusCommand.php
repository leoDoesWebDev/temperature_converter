<?php

namespace App\Commands;

use App\Convert\Celsius;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ConvertCelsiusCommand extends ConvertTemperatureCommand
{
    protected static $defaultName = 'convert:celsius';
    protected static $defaultDescription = 'Converts celsius temperatures to a given scale.';

    public function __construct()
    {
        $this->class = 'App\Convert\Celsius';
        parent::__construct();
    }
}