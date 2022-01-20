<?php

require __DIR__.'/vendor/autoload.php';

use App\Command\ConvertFahrenheitCommand;
use App\Command\ConvertKelvinCommand;
use Symfony\Component\Console\Application;
use App\Command\ConvertCelsiusCommand;

$application = new Application();

// ... register commands
$application->add(new ConvertCelsiusCommand());
$application->add(new ConvertFahrenheitCommand());
$application->add(new ConvertKelvinCommand());
$application->run();