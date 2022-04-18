<?php

require_once 'Highway.php';

final class PedestrianWay extends Highway 
{

    public function __construct(int $nbLane = 1, int $nmaxSpeed = 10)
    {
        parent::__construct($nbLane, $nmaxSpeed);
    }

    public function addVehicle(Vehicle $vehicle) : Void 
    {
        if (is_a($vehicle, 'Bicycle') || is_a($vehicle, 'Skateboard')) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}