<?php

namespace App\Patterns\Creational\Builder;

use App\Patterns\Creational\Builder\Parts\Car;
use App\Patterns\Creational\Builder\Parts\Vehicle;

class CarBuilder implements Builder
{
    private Car $car;

    public function createVehicle(): void
    {
        $this->car = new Car();
    }

    public function addDoors(): void {}

    public function addWheels(): void {}

    public function addEngine(): void {}

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}
