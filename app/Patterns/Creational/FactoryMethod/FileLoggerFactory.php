<?php

namespace App\Patterns\Creational\FactoryMethod;

class FileLoggerFactory implements LoggerFactory
{
    public function __construct(private string $filePath) {}
    public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }
}
