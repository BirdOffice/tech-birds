<?php


namespace App\Manager;


use App\Entity\Car;

class CarManager
{
    /**
     * @param Car $car
     * @return bool
     */
    public function checkValidPriceCar(Car $car): bool
    {
        return $car->checkPriceIncludeVAT();
    }
}