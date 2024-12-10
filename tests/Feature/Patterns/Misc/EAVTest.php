<?php

namespace Tests\Feature\Patterns\Misc;

use App\Patterns\Misc\EAV\Attribute;
use App\Patterns\Misc\EAV\Entity;
use App\Patterns\Misc\EAV\Value;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EAVTest extends TestCase
{
    public function testCanAddAttributeToEntity(): void
    {
        $colorAttribute = new Attribute('color');
        $colorSilver = new Value($colorAttribute, 'silver');
        $colorBlack = new Value($colorAttribute, 'black');

        $memoryAttribute = new Attribute('memory');
        $memory8Gb = new Value($memoryAttribute, '8GB');

        $entity = new Entity('MacBook Pro', [$colorSilver, $colorBlack, $memory8Gb]);

        $this->assertEquals('MacBook Pro, color: silver, color: black, memory: 8GB', (string) $entity);
    }
}
