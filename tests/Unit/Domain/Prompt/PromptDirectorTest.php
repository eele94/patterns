<?php

namespace Tests\Unit\Domain\Prompt;

use App\Domains\Prompt\AdTitlePromptBuilder;
use App\Domains\Prompt\Parts\AdTitlePrompt;
use App\Domains\Prompt\PromptDirector;
use Tests\TestCase;

class PromptDirectorTest extends TestCase
{
    // public function testCanBuildImagePrompt():void
    // {
    //     $builder = new ImagePromptBuilder();
    // }

    public function testCanBuildAdTitlePrompt(): void
    {
        $builder = new AdTitlePromptBuilder();

        $build = (new PromptDirector())->build($builder);
        // dd($build->getMessages());

        $this->assertInstanceOf(AdTitlePrompt::class, $build);
    }
}
