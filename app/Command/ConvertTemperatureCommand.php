<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;

class ConvertTemperatureCommand extends Command
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setHelp('This command converts temperatures to given scale')
            ->addArgument('temperature_value', InputArgument::REQUIRED, 'Temperature Value')
            ->addArgument('temperature_scale_to', InputArgument::REQUIRED, 'To Scale');
    }
}