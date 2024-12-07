<?php

namespace App\Patterns\Creational\AbstractFactory;

class WinCsvWriter implements CsvWriter
{
    public function write(array $lines): string
    {
        return join(',', $lines) . "\r\n";
    }
}
