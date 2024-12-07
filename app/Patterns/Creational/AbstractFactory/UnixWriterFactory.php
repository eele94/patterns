<?php

namespace App\Patterns\Creational\AbstractFactory;

class UnixWriterFactory implements WriterFactory
{
    public function createJsonWriter(): JsonWriter
    {
        return new UnixJsonWriter();
    }
    public function createCsvWriter(): CsvWriter
    {
        return new UnixCsvWriter();
    }
}
