<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function greeting()
{
    line('/Welcome to the Brain Games!/');
    $user = prompt('May I have your name?');
    line("Hello, %s!", $user);
}
