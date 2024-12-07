<?php

namespace App\Patterns\Creational\AbstractFactory;

interface WriterFactory
{
    public function createJsonWriter(): JsonWriter;
    public function createCsvWriter(): CsvWriter;
}
