<?php
namespace App\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Spatie\Regex\Regex;


class CreateProjectCommand extends Command
{
    protected static $defaultName = 'make:project';

    protected function configure()
    {

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // ...

        $result = Regex::replace('/\{\{name\}\}/', 'SamplePlugin', file_get_contents(ROOT . '/app/Core/Template/index.txt'))->result();

        $handle = fopen('index.php', "w");
        fwrite($handle, $result);
        fclose($handle);
    }
}