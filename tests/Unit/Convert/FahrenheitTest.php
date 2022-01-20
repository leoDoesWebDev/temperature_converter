<?php
namespace Tests\Unit\Convert;

use App\Convert\Fahrenheit;

class FahrenheitTest extends ConvertTestCase
{
    private Fahrenheit $class;

    public function setUp(): void
    {
        parent::setUp();


        $this->class = new Fahrenheit($this->random_temperature);

    }

    public function testCelsius(){
        $expected = ($this->random_temperature * 9/5) + 32;
        $actual = $this->class->convertTo('C');

        $this->assertEquals($expected, $actual);
    }


    public function testFahrenheit(){
        $actual = $this->class->convertTo('F');

        $this->assertEquals($this->random_temperature, $actual);
    }


    public function testKelvin(){
        $expected = ($this->random_temperature - 32) * 5/9 + 273.15;
        $actual = $this->class->convertTo('K');

        $this->assertEquals($expected, $actual);
    }
}