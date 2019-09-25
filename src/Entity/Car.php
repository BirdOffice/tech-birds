<?php


namespace App\Entity;


class Car
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $brand;

    /**
     * @var string
     */
    private $model;

    /**
     * @var float
     */
    private $priceHT;

    /**
     * @var int
     */
    private $tvaRate = 20;

    /**
     * @var float
     */
    private $priceTtc;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return float
     */
    public function getPriceHT(): float
    {
        return $this->priceHT;
    }

    /**
     * @param float $priceHT
     */
    public function setPriceHT(float $priceHT): void
    {
        $this->priceHT = $priceHT;
    }

    /**
     * @return int
     */
    public function getTvaRate(): int
    {
        return $this->tvaRate;
    }

    /**
     * @return float
     */
    public function getPriceTtc(): float
    {
        return $this->priceTtc;
    }

    /**
     * @param float $priceTtc
     */
    public function setPriceTtc(float $priceTtc): void
    {
        $this->priceTtc = $priceTtc;
    }

    /**
     * @return bool
     */
    public function checkPriceIncludeVAT(): bool
    {
        $priceTtc =  ($this->getPriceHT() * (1 + $this->getTvaRate()/100));
        if ($this->getPriceTtc() === $priceTtc){
            return true;
        }

        return false;
    }
}