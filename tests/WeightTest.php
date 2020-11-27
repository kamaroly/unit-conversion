<?php

namespace Kamaro\UnitConversion\Tests;

use PHPUnit\Framework\TestCase;
use Kamaro\UnitConversion\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kg_to_lbs()
    {
        $lbs = Weight::fromKilograms($kilograms = 100)->toLbs();
        $this->assertEquals(220.4623, $lbs);
    }
}
