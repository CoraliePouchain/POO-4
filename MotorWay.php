<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay 
{
    public function addVehicle($car)
    {
       if($car instanceof self){
           $this->currentVehicles[] = $car;
       } else {
           return 'This vehicle can\'t go on the motorway';
       }
    }   
}
