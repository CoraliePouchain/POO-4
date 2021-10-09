<?php

class Car
{
    private int $nbWheels;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats;

    private string $fuelType;

    private int $currentFuelType;

    public function __construct(string $color, int $nbSeats, string $fuelType)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->fuelType = $fuelType;
    }

    public function start(): string
    {
        $this->currentSpeed = 0;
        return 'Start the car';
    }

    public function forward(): string
    {
        $this->currentSpeed = 30;
        return 'D\'Oh !';
    }

    public function brake(): string
    {
        $sentence = '';
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= 'Oh pinaise !';
        }
        $sentence .= '<br> Mmmm un donut';
        return $sentence;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getFuelType(): string
    {
        return $this->fuelType;
    }

    public function getCurrentFuelLevel(): int
    {
        return $this->currentFuelLevel;
    }
}