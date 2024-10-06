<?php

require_once __DIR__ . "/../vendor/autoload.php";

use function BrainGames\Cli\cli;

$name = cli();

echo("goodbye, " . $name);
