<?php

require_once './Vehicle.php';

class Car extends Vehicle
{
    /*public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];*/

    //private string $fuelType;

    private int $currentFuelLevel;

    public function __construct(string $color, int $nbSeats, string $fuelType)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->fuelType = $fuelType;
    }

    /*public function getFuelType(): string
    {
        return $this->fuelType;
    }

    public function setFuelType(string $fuelType): Vehicle
    {
        if (in_array($energy, parent::ALLOWED_ENERGIES)){
        $this->energy = $energy;
        }
        return $this;
    }*/

    public function getCurrentFuelLevel(): int
    {
        return $this->currentFuelLevel;
    }

    public function setCurrentFuelLevel(): void
    {
        $this->currentFuelLevel;
    }
}