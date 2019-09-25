<?php


namespace App\Tests\Entity\Car;


use App\Entity\Car;
use PHPUnit\Framework\TestCase;

class CarTest2 extends TestCase
{
    public function testCheckPriceTtcIsFalse()
    {
        // Creation d'une nouvelle voiture
        $car = new Car();
        $car->setBrand('porsche');
        $car->setModel('911 GT3 RS');
        $car->setPriceTtc(200000.4);
        $car->setPriceHT(166627);


        // Vérification à l'aide de nôtre function et de PhpUnit si le résultat est bien celui souhaité.
        $this->assertFalse($car->checkPriceTtc());
    }
}