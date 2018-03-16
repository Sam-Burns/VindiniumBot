<?php

namespace AgileCyborg\Bot;

class RandomBot extends Bot
{
    public function move($state)
    {
        $dirs = array('Stay', 'North', 'South', 'East', 'West');
        return $dirs[array_rand($dirs)];
    }
}
