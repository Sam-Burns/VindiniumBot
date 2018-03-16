<?php

namespace spec\AgileCyborg\Bot;

use AgileCyborg\Bot\RandomBot;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RandomBotSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RandomBot::class);
    }
}
