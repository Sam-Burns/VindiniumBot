<?php

namespace spec\VindiniumBot\Application;

use VindiniumBot\Application\RunCommand;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RunCommandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RunCommand::class);
    }
}
