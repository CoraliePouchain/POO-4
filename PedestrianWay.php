<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay 
{
    public function addVehicle($bike)
    {
       if($bike instanceof self){
           $this->currentVehicles[] = $bike;
       } else {
           return 'This vehicle can\'t go on the motorway';
       }
    }   
}
