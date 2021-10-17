<?php

require_once './../Vehicle/Vehicle.php';

abstract class HighWay 
{
    protected array $currentVehicles;

    protected int $nbLaine;

    protected int $maxSpeed;

    abstract function addVehicle(Vehicle $vehicle);

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function getCurrentVehicles():array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles():void
    {
        $this->currentVehicles=$currentVehicles;
    }

    public function getNbLaine():int
    {
        return $this->nbLane;
    }

    public function setNbLane():void
    {
        $this->nbLane=$nbLane;
    }

    public function getMaxSpeed():int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed():void
    {
        $this->maxSpeed=$maxSpeed;
    }
}