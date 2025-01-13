<?php

namespace App\Domains\Prompt;

use App\Domains\Prompt\Parts\Prompt;

class PromptDirector
{
    public function build(PromptBuilder $builder): Prompt
    {
        $builder->createPrompt();
        $builder->addInstructor();
        $builder->addInstruction();
        $builder->addObjective();
        $builder->addExamples();

        return $builder->getPrompt();
    }
}
