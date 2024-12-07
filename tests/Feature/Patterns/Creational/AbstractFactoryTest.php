<?php

namespace Tests\Feature\Patterns\Creational;

use App\Patterns\Creational\AbstractFactory\CsvWriter;
use App\Patterns\Creational\AbstractFactory\JsonWriter;
use App\Patterns\Creational\AbstractFactory\UnixWriterFactory;
use App\Patterns\Creational\AbstractFactory\WinWriterFactory;
use App\Patterns\Creational\AbstractFactory\WriterFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class AbstractFactoryTest extends TestCase
{
    public static function provideFactory(): array
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()],
        ];
    }

    #[DataProvider('provideFactory')]
    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory): void
    {
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }
}
