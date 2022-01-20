<?php

namespace App\Command;

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
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $temperature_value =  $input->getArgument('temperature_value');
        $from_temperature_scale = $input->getArgument('temperature_scale_to');

        $celsius = new Celsius($temperature_value);
        $converted_temperature = $celsius->convertTo($from_temperature_scale);
        $output->writeln('Output: '. $converted_temperature);

        return Command::SUCCESS;
    }
}