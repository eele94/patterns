<?php

namespace App\Patterns\Creational\Pool;

class StringReverseWorker
{
    private \DateTime $createdAt;
    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function run(string $text): string
    {
        return strrev($text);
    }
}
