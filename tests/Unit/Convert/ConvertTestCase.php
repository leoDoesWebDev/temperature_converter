<?php

namespace Tests\Unit\Convert;

use Tests\TestCase;

abstract class ConvertTestCase extends TestCase
{
    protected int $random_temperature;

    public function setUp(): void
    {
        parent::setUp();

        $this->random_temperature = rand(-25, 25);
    }
}