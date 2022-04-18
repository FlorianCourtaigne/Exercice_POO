<?php

require_once 'Highway.php';
require_once 'Vehicle.php';

final class ResidentialWay extends Highway 
{

    public function __construct(int $nbLane = 2, int $nmaxSpeed = 50)
    {
        parent::__construct($nbLane, $nmaxSpeed);
    }

    public function addVehicle(Vehicle $vehicle) : Void 
    {
        $this->currentVehicles[] = $vehicle;
    }
}