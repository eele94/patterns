<?php

namespace App\Patterns\Creational\Builder;

use App\Patterns\Creational\Builder\Builder;
use App\Patterns\Creational\Builder\Parts\Truck;
use App\Patterns\Creational\Builder\Parts\Vehicle;

class TruckBuilder implements Builder
{
    private Truck $truck;

    public function createVehicle(): void
    {
        $this->truck = new Truck();
    }

    public function addWheels(): void {}

    public function addEngine(): void {}

    public function addDoors(): void {}

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}
