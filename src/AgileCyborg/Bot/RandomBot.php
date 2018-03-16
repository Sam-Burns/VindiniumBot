<?php

namespace AgileCyborg\Bot;

class RandomBot implements Bot
{
    public function move($state) : string
    {
        $dirs = array('Stay', 'North', 'South', 'East', 'West');
        return $dirs[array_rand($dirs)];
    }
}
