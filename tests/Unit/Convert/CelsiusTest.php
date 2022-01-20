<?php
namespace Tests\Unit\Convert;

use App\Convert\Celsius;

class CelsiusTest extends ConvertTestCase
{
    private Celsius $class;

    public function setUp(): void
    {
        parent::setUp();

        $this->random_temperature = rand(-25, 25);
        $this->class = new Celsius($this->random_temperature);

    }

    public function testCelsius(){
        $actual = $this->class->convertTo('C');

        $this->assertEquals($this->random_temperature, $actual);
    }


    public function testFahrenheit(){
        $expected = ($this->random_temperature * 9/5) + 32;
        $actual = $this->class->convertTo('F');

        $this->assertEquals($expected, $actual);
    }


    public function testKelvin(){
        $expected = $this->random_temperature + 273.15;
        $actual = $this->class->convertTo('K');

        $this->assertEquals($expected, $actual);
    }
}