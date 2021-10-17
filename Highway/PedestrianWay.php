<?php

require_once 'HighWay.php';
require_once './../Vehicle/Bicycle.php';
require_once './../Vehicle/Skateboard.php';

final class PedestrianWay extends HighWay 
{
    public function addVehicle(Vehicle $vehicle)
    {
       if($vehicle instanceof Bicycle || $vehicle instanceof Skateboard){
           $this->currentVehicles[] = $vehicle;
       } else {
           return 'This type of vehicle can\'t go on the pedestrian way';
       }
    }   
}
