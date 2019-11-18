<?php


namespace App\Tests\Entity\Car;


use PHPUnit\Framework\TestCase;

class Car2Test extends TestCase
{
    /**
     * @dataProvider provider
     * @param $a
     * @param $b
     * @param $c
     */
    public function testCount($a, $b, $c): void
    {
        $this->assertEquals($c, $a + $b);
    }

    public function provider(): array
    {
        return [
            [1, 1, 2]
        ];
    }
}