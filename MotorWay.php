<?php

require_once 'Highway.php';

final class MotorWay extends Highway 
{

    public function __construct(int $nbLane = 4, int $nmaxSpeed = 130)
    {
        parent::__construct($nbLane, $nmaxSpeed);
    }

    public function addVehicle(Vehicle $vehicle) : Void 
    {
        if (!is_a($vehicle, 'Bicycle') and !is_a($vehicle, 'Skateboard')) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}