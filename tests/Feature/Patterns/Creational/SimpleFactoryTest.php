<?php

namespace Tests\Feature\Patterns\Creational;

use App\Patterns\Creational\SimpleFactory\Bicycle;
use App\Patterns\Creational\SimpleFactory\SimpleFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}
