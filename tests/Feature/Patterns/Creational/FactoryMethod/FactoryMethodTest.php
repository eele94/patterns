<?php

namespace Tests\Feature\Patterns\Creational\FactoryMethod;

use App\Patterns\Creational\FactoryMethod\FileLogger;
use App\Patterns\Creational\FactoryMethod\FileLoggerFactory;
use App\Patterns\Creational\FactoryMethod\StdoutLogger;
use App\Patterns\Creational\FactoryMethod\StdoutLoggerFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $factory = new StdoutLoggerFactory();
        $logger = $factory->createLogger();
        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $factory = new FileLoggerFactory('test.log');
        $logger = $factory->createLogger();
        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}
