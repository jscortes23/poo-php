<?php

use PHPUnit\Framework\TestCase;
use App\Benefits;
use App\City;

class PostBenefitsTest extends TestCase
{
    public function test_add_benefit_to_page()
    {
        $benefit = new Benefit();
        $city = new City();

        $benefit->addCity($city);

        $this->assertEquals(1, $benefit->countBenefits());
        $this->assertInstanceOf(City::class, $benefit->getBenefits()[0]);

    }
}