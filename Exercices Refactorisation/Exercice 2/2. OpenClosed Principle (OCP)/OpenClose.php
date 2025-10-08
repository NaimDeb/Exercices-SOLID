<?php

namespace OCPViolation;

class GasStation
{

    public function putGasInVehicle(Vehicle $vehicle)
    {
        $vehicle->setTank($vehicle->getMaxTank());
    }

}

class Vehicle
{
    protected $type;
    protected $tank;
    protected $maxTank;

    public function getType()
    {
        return $this->type;
    }

    public function setTank($tank)
    {
        $this->tank = $tank;
    }

    public function getMaxTank()
    {
        return $this->maxTank;
    }
}

class Car extends Vehicle
{
    protected $type = 1;
    protected $maxTank = 50;
}

class Motorcycle extends Vehicle
{
    protected $type = 2;
    protected $maxTank = 20;
}