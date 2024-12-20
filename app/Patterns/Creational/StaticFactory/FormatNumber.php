<?php

namespace App\Patterns\Creational\StaticFactory;

class FormatNumber implements Formatter
{
    public function format(string $input): string
    {
        return number_format($input);
    }
}
