<?php

namespace VindiniumBot\Application;

use Symfony\Component\Console\Application as SymfonyApplication;

class Application
{
    private $symfonyApp;

    public function __construct(RunCommand $command)
    {
        $this->symfonyApp = new SymfonyApplication();
        $this->symfonyApp->addCommands([$command]);
    }

    /**
     * @throws \Exception
     */
    public function run()
    {
        $this->symfonyApp->run();
    }
}
