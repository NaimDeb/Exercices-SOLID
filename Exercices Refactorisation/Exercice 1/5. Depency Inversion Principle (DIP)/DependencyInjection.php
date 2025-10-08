<?php

// TODO refactoriser le code pour respecter le Principe de d'Invertion de Dépendence de la programmation SOLID

abstract class Device {
    public function on(){}
}

class Computer implements Device
{
}

class Button 
{
    /**
     * @var Device
     */
    private $device;

    public function __construct(Device $device)
    {
        $this->device = $device;
    }

    public function activate()
    {
        if (1 == 1) { //some condition
            $this->device->on();
        }
    }
}