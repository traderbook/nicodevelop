<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface as InputInterfaceAlias;
use Symfony\Component\Console\Output\OutputInterface as OutputInterfaceAlias;


class CreatePlugin extends Command
{
    protected static $defaultName = 'app:create-user';

    protected function configure()
    {
        // ...
    }

    protected function execute(InputInterfaceAlias $input, OutputInterfaceAlias $output)
    {
        // ...
    }
}