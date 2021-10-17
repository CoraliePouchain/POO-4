<?php

require_once 'HighWay.php';
require_once './../Vehicle/Car.php';

final class MotorWay extends HighWay 
{
    public function addVehicle(Vehicle $vehicle)
    {
       if($vehicle instanceof Car){
           $this->currentVehicles[] = $vehicle;
       } else {
           return 'This type of vehicle can\'t go on the motorway';
       }
    }   
}
