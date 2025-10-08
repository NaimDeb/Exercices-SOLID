<?php

// TODO refactoriser le code pour respecter le principe OCP de la programmation SOLID

class Vehicle 
{
    public function run(){}
}

interface CanTurnOn
{
    function turnOn();
}

class Motorcycle extends Vehicle implements CanTurnOn
{
    function turnOn(){ echo 'Turning on the car';}
}

class Car extends Vehicle implements CanTurnOn
{
    function turnOn(){echo 'Turning on the motorcycle';}
}

class Driver 
{
    public function drive(Vehicle $vehicle)
    {
        if ($vehicle instanceof CanTurnOn) {
            $vehicle->turnOn();
        }       
        
        $vehicle->run();
    }
}