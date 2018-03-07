<?php

namespace VindiniumBot\Application;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RunCommand extends SymfonyCommand
{
    public function configure()
    {
        $this->setName('run');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
    }
}
