<?php


namespace App\Tests\Entity\Car;


use App\Entity\Car;
use App\Manager\CarManager;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;

class CarTest extends WebTestCase
{
    /**
     * @var CarManager
     */
    private $carManager;

    /**
     * @var ContainerInterface
     */
    private $kernelContainer;


    public function setUp(): void
    {
        self::bootKernel();
        self::$kernel->getContainer();
        $this->kernelContainer = self::$container;
        $this->carManager = $this->kernelContainer->get(CarManager::class);
    }

    public function testCheckPriceIncludeVATIsGood(): void
    {
        // Creation d'une nouvelle voiture
        $car = new Car();
        $car->setBrand('porsche');
        $car->setModel('911 GT3 RS');
        $car->setPriceTtc(200000.4);
        $car->setPriceHT(166667);

        // Vérification à l'aide de notre function et de PhpUnit si le résultat est bien celui souhaité.
        $this->assertTrue($this->carManager->checkValidPriceCar($car));
    }
}