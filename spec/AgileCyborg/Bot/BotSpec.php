<?php

namespace spec\AgileCyborg\Bot;

use AgileCyborg\Bot\Bot;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BotSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Bot::class);
    }
}
