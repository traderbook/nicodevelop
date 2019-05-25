<?php
namespace App\Console;

use Symfony\Component\Console\Application;

class Console
{
    public function __construct()
    {
        $list = scandir(__DIR__ . "/Command");

        $application = new Application();

        foreach ($list as $value) {
            if($value !== '.' && $value !== '..') {
                $valueExploded = explode('.', $value);
                require __DIR__ . "/Command/" . $value;
                $className = array_shift($valueExploded);

                $application->add(new $className());
            }
        }

        $application->run();
    }
}