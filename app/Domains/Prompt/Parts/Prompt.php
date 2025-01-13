<?php

namespace App\Domains\Prompt\Parts;

class Prompt
{
    public string $instructor;

    public string $instruction;

    public string $objective;

    public string $examples;

    public function getMessages(): array
    {
        return [
            [
                'role' => 'System',
                'message' => $this->instructor,
            ],
            [
                'role' => 'User',
                'message' => $this->getUserPrompt(),
            ],
        ];
    }

    private function getUserPrompt()
    {
        $prompt = "$this->instruction";

        if ($this->objective) {
            $prompt .= "\n\nObjective: $this->objective";
        }

        if ($this->examples) {
            $prompt .= "\n\nSee examples: $this->examples";
        }

        return $prompt;
    }
}
