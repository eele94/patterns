<?php

namespace App\Domains\Prompt;

use App\Domains\Prompt\Parts\AdTitlePrompt;
use App\Domains\Prompt\Parts\Prompt;

class AdTitlePromptBuilder implements PromptBuilder
{
    private AdTitlePrompt $adTitlePrompt;

    public function createPrompt(): void
    {
        $this->adTitlePrompt = new AdTitlePrompt();
    }

    public function addInstructor(): void
    {
        $this->adTitlePrompt->instructor = 'You are a facebook advertising specialist in ad titles, here are the compliance rules: rule 1, blabla.';
    }

    public function addInstruction(): void
    {
        $this->adTitlePrompt->instruction = 'Create an ad title';
    }

    public function addObjective(): void
    {
        $this->adTitlePrompt->objective = 'To see prices or offers, choose most relevant';
    }

    public function addExamples(): void
    {
        $this->adTitlePrompt->examples = "New tire prices may surprise you\nFind apartments for under 300\$";
    }

    public function getPrompt(): Prompt
    {
        return $this->adTitlePrompt;
    }
}
