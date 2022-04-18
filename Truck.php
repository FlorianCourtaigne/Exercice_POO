<?php

require_once('Vehicle.php');

class Truck extends Vehicle 
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity, int $truckLoad = 0)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity=$storageCapacity;
        $this->truckLoad = $truckLoad;
    }

    public function setStorageCapacity(int $storageCapacity) : void
    {
        $this->storageCapacity = $storageCapacity ;
    }

    public function getStorageCapacity(): int 
    {
        return $this->storageCapacity;
    }

    public function setTruckLoad(int $truckLoad) : void
    {
        $this->truckLoad = $truckLoad ;
    }

    public function getTruckLoad(): int 
    {
        return $this->truckLoad;
    }

    public function loadingState() : string
    {
        $sentence = "";
        if ($this->truckLoad === $this->storageCapacity) {
            return $sentence = "full".PHP_EOL;
        } else return $sentence = "in filling".PHP_EOL;
    }

}