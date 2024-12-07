<?php

namespace App\Patterns\Creational\AbstractFactory;

interface CsvWriter
{
    public function write(array $lines): string;
}
