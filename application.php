<?php

require __DIR__.'/vendor/autoload.php';

use App\Commands\ConvertFahrenheitCommand;
use App\Commands\ConvertKelvinCommand;
use Symfony\Component\Console\Application;
use App\Commands\ConvertCelsiusCommand;

$application = new Application();

// ... register commands
$application->add(new ConvertCelsiusCommand());
$application->add(new ConvertFahrenheitCommand());
$application->add(new ConvertKelvinCommand());
$application->run();