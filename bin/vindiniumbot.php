<?php

require_once __DIR__ . '/../vendor/autoload.php';

use UltraLite\Container\Container;
use VindiniumBot\Application\Application;

$container = new Container();
$container->configureFromFile(__DIR__ . '/../config/di.php');

$application = $container->get('application'); /** @var $application Application */
$application->run();
