<?php

namespace Kamaro\UnitConversion\Tests;

use Kamaro\UnitConversion\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kg_to_lbs()
    {
        $lbs = Weight::fromKilograms($kilograms = 100)->toLbs();
        $this->assertEquals(220.4623, $lbs);
    }
}
