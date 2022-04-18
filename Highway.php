<?php

require_once 'Vehicle.php';

abstract class Highway
{
    protected array $currentVehicles = [];

    protected int $nbLane;

    protected int $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle(Vehicle $vehicle);
    
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles($currentVehicle)
    {
        $this->currentVehicles[] = $currentVehicle;

    }

    public function getNbLane()
    {
        return $this->nbLane;
    }

    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }
}