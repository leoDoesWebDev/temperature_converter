<?php

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ConvertTemperatureCommand extends Command
{
    protected string $class;

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


    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $temperature_value =  $input->getArgument('temperature_value');
        $temperature_scale_to = $input->getArgument('temperature_scale_to');

        $temp = new $this->class($temperature_value);
        $converted_temperature = $temp->convertTo($temperature_scale_to);
        $output->writeln('Output: '. $converted_temperature);

        return Command::SUCCESS;
    }
}