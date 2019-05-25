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

                $className = (string) array_shift($valueExploded);

                $className = "App\\Console\\Command\\$className";

                $application->add(new $className());
            }
        }

        $application->run();
    }
}