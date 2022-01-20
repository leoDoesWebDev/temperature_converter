<?php
namespace Tests\Unit\Convert;

use App\Convert\Kelvin;

class KelvinTest extends ConvertTestCase
{
    private Kelvin $class;

    public function setUp(): void
    {
        parent::setUp();
        $this->class = new Kelvin($this->random_temperature);

    }

    public function testCelsius(){
        $actual = $this->class->convertTo('C');
        $expected = $this->random_temperature - 273.15;

        $this->assertEquals($expected, $actual);
    }


    public function testFahrenheit(){
        $actual = $this->class->convertTo('F');
        $expected = ($this->random_temperature - 273.15) * 9/5 + 32;

        $this->assertEquals($expected, $actual);
    }


    public function testKelvin(){
        $actual = $this->class->convertTo('K');

        $this->assertEquals($this->random_temperature, $actual);
    }
}