<?php

namespace App\Patterns\Creational\FactoryMethod;

interface LoggerFactory
{
    public function createLogger(): Logger;
}
