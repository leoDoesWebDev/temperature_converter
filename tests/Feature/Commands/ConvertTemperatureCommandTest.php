<?php
namespace Tests\Feature\Commands;

use App\Commands\ConvertCelsiusCommand;
use App\Commands\ConvertFahrenheitCommand;
use App\Commands\ConvertKelvinCommand;
use App\Convert\Celsius;
use App\Convert\Fahrenheit;
use App\Convert\Kelvin;
use Symfony\Component\Console\Application;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

class ConvertTemperatureCommandTest extends TestCase
{
    private array $temperature_scales;

    public function setUp(): void
    {
        parent::setUp();

       $this->temperature_scales = [ 'f' => 'fahrenheit', 'c' =>'celsius', 'k' => 'kelvin'];
    }

    public function testKelvinCommandExecute() {

        foreach ($this->temperature_scales as  $temperature_abbreviated_scale  => $temperature_fullform_scale){
            $temperature_value = rand(-25, 25);

            $application = new Application();
            $application->add(new ConvertKelvinCommand());
            $command = $application->find('convert:kelvin');
            $command_tester = new CommandTester($command);
            $command_tester->execute(array(
                'command' => $command->getName(),
                'temperature_value' => $temperature_value,
                'temperature_scale_to' => $temperature_abbreviated_scale
            ));

            $output = (new Kelvin($temperature_value))->convertTo($temperature_abbreviated_scale);
            $expected = "Output: {$output}\n";
            $actual = $command_tester->getDisplay();

            $this->assertEquals($expected, $actual);
        }
    }

    public function testCelsiusCommandExecute() {

        foreach ($this->temperature_scales as  $temperature_abbreviated_scale  => $temperature_fullform_scale){
            $temperature_value = rand(-25, 25);

            $application = new Application();
            $application->add(new ConvertCelsiusCommand());
            $command = $application->find('convert:celsius');
            $command_tester = new CommandTester($command);
            $command_tester->execute(array(
                'command' => $command->getName(),
                'temperature_value' => $temperature_value,
                'temperature_scale_to' => $temperature_abbreviated_scale
            ));

            $output = (new Celsius($temperature_value))->convertTo($temperature_abbreviated_scale);
            $expected = "Output: {$output}\n";
            $actual = $command_tester->getDisplay();

            $this->assertEquals($expected, $actual);
        }
    }

    public function testFahrenheitCommandExecute() {

        foreach ($this->temperature_scales as  $temperature_abbreviated_scale  => $temperature_fullform_scale){
            $temperature_value = rand(-25, 25);

            $application = new Application();
            $application->add(new ConvertFahrenheitCommand());
            $command = $application->find('convert:fahrenheit');
            $command_tester = new CommandTester($command);
            $command_tester->execute(array(
                'command' => $command->getName(),
                'temperature_value' => $temperature_value,
                'temperature_scale_to' => $temperature_abbreviated_scale
            ));

            $output = (new Fahrenheit($temperature_value))->convertTo($temperature_abbreviated_scale);
            $expected = "Output: {$output}\n";
            $actual = $command_tester->getDisplay();

            $this->assertEquals($expected, $actual);
        }
    }





}