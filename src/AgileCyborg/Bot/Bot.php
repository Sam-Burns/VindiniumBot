<?php

namespace AgileCyborg\Bot;

interface Bot
{
    public function move($state) : string;
}
