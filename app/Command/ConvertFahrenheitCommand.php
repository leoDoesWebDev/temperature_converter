<?php

namespace App\Command;

use App\Convert\Fahrenheit;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ConvertFahrenheitCommand extends ConvertTemperatureCommand
{
    protected static $defaultName = 'convert:fahrenheit';
    protected static $defaultDescription = 'Converts fahrenheit temperatures to a given scale.';

    public function __construct()
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $temperature_value =  $input->getArgument('temperature_value');
        $from_temperature_scale = $input->getArgument('temperature_scale_to');

        $fahrenheit = new Fahrenheit($temperature_value);
        $converted_temperature = $fahrenheit->convertTo($from_temperature_scale);
        $output->writeln('Output: '. $converted_temperature);

        return Command::SUCCESS;
    }
}