<?php

namespace spec\AgileCyborg\Client;

use AgileCyborg\Client\HttpPost;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HttpPostSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(HttpPost::class);
    }
}
