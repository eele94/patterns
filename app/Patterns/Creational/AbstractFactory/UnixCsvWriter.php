<?php

namespace App\Patterns\Creational\AbstractFactory;

class UnixCsvWriter implements CsvWriter
{
    public function write(array $lines): string
    {
        return join(',', $lines) . "\n";
    }
}
