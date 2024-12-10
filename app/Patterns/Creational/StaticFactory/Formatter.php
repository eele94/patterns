<?php

namespace App\Patterns\Creational\StaticFactory;

interface Formatter
{
    public function format(string $input): string;
}
