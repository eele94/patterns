<?php

namespace Tests\Feature\Patterns\Creational\Builder;

use App\Patterns\Creational\Builder\CarBuilder;
use App\Patterns\Creational\Builder\TruckBuilder;
use App\Patterns\Creational\Builder\Director;
use App\Patterns\Creational\Builder\Parts\Car;
use App\Patterns\Creational\Builder\Parts\Truck;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DirectoryTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testCanBuildTruck(): void
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar(): void
    {
        $CarBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($CarBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}
