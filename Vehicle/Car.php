<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    private bool $hasParkBrake = true;

    private int $currentFuelLevel;

    public function __construct(string $color, int $nbSeats, string $fuelType)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->fuelType = $fuelType;
    }

    public function getCurrentFuelLevel(): int
    {
        return $this->currentFuelLevel;
    }

    public function setCurrentFuelLevel(): void
    {
        $this->currentFuelLevel;
    }

    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

    public function start()
    {
        if($this->getHasParkBrake() === true){
            throw new Exception('Careful park brake engaged !' . '<br>');
        }
        return 'You\'re all good' . '<br>';
    }
}