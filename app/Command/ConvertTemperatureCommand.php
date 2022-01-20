<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

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


    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $temperature_value =  $input->getArgument('temperature_value');
        $from_temperature_scale = $input->getArgument('temperature_scale_to');

        $temp = new $this->class($temperature_value);
        $converted_temperature = $temp->convertTo($from_temperature_scale);
        $output->writeln('Output: '. $converted_temperature);

        return Command::SUCCESS;
    }
}