<?php

namespace Tests\Feature\Patterns\Misc;

use App\Patterns\Misc\ServiceLocator\LogService;
use App\Patterns\Misc\ServiceLocator\ServiceLocator;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServiceLocatorTest extends TestCase
{
    private ServiceLocator $serviceLocator;

    public function setUp(): void
    {
        $this->serviceLocator = new ServiceLocator();
    }

    public function testHasServices()
    {
        $this->serviceLocator->addInstance(LogService::class, new LogService());

        $this->assertTrue($this->serviceLocator->has(LogService::class));
        $this->assertFalse($this->serviceLocator->has(self::class));
    }

    public function testGetWillInstantiateLogServiceIfNoInstanceHasBeenCreatedYet()
    {
        $this->serviceLocator->addClass(LogService::class, []);
        $logger = $this->serviceLocator->get(LogService::class);

        $this->assertInstanceOf(LogService::class, $logger);
    }
}
