<?php

use Psr\Container\ContainerInterface;
use VindiniumBot\Application\Application;
use VindiniumBot\Application\RunCommand;

return [
    'application' =>
        function (ContainerInterface $container) {
            $command = new RunCommand();
            return new Application($command);
        },
];
