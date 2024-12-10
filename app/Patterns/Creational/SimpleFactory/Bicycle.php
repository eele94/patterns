<?php

namespace App\Patterns\Creational\SimpleFactory;

class Bicycle
{
    public function driveTo(string $destination)
    {
        echo "Driving to $destination\n";
    }
}
