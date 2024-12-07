<?php

namespace App\Patterns\Creational\Builder;

use App\Patterns\Creational\Builder\Parts\Vehicle;

class Director
{
    public function build(Builder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheels();
        return $builder->getVehicle();
    }
}
