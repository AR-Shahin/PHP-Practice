<?php

class Driver
{
    public $vehicle;

    function __construct(VehicleInterface $vehicle)
    {
        $this->vehicle = $vehicle;
    }
    public function startVehicle()
    {
        $this->vehicle->start();
    }
}
class Vehicle
{
    public $engine;

    function __construct(Engine $engine)
    {
        $this->engine = $engine;
    }

    function start()
    {
        echo 'Vehicle Start!';
    }
}
class Engine
{
}
class Bike implements VehicleInterface
{
    function start()
    {
        echo 'Bike Start!';
    }
}
class Car implements VehicleInterface
{
    function start()
    {
        echo 'Car Start!';
    }
}
interface VehicleInterface
{
    public function start();
}

$engine = new Engine;
$vehicle = new Vehicle($engine);
$driver = new Driver(new Car());

$driver->startVehicle();
