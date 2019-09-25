<?php


namespace App\Tests\Entity\Car;


use App\Entity\Car;
use PHPUnit\Framework\TestCase;

class Car2Test extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testAdd($a, $b, $c)
    {
        $this->assertEquals($c, $a + $b);
    }

    public function provider()
    {
        return
            array(1, 1, 2);
    }
}