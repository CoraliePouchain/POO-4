<?php

require_once './Vehicle.php';

class Truck extends Vehicle
{
    private int $stockageCapacity;

    private int $load;
    
    public function __construct(int $stockageCapacity, string $color, int $nbSeats, string $fuelType)
    {
        $this->stockageCapacity = $stockageCapacity;
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->fuelType = $fuelType;
    }

    public function isFull(): string
    {
        $sentence = '';
        while($this->load < $this->stockageCapacity){
            $this->load++;
            $sentence .= 'Filling...';
        }
        $sentence .= 'Full';
        return $sentence;
    }

    public function getStockageCapacity(): int
    {
        return $this->stockageCapacity;
    }

    public function setStockageCapacity(int $stockageCapacity): void
    {
        $this->stockageCapacity = $stockageCapacity;
    }

    public function getLoad(): int
    {
        return $this->load;
    }

    public function setLoad(int $load): void
    {
        $this->load = $load;
    }

    
}