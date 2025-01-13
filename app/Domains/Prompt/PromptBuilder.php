<?php

namespace App\Domains\Prompt;

use App\Domains\Prompt\Parts\Prompt;

interface PromptBuilder
{
    public function createPrompt(): void;

    public function addInstructor(): void;

    public function addInstruction(): void;

    public function addObjective(): void;

    public function addExamples(): void;

    public function getPrompt(): Prompt;
}
