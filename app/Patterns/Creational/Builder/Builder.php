<?php

namespace App\Patterns\Creational\Builder;

use App\Patterns\Creational\Builder\Parts\Vehicle;

interface Builder
{
    public function createVehicle(): void;
    public function addWheels(): void;
    public function addEngine(): void;
    public function addDoors(): void;
    public function getVehicle(): Vehicle;
}
