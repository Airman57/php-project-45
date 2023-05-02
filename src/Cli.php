<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function greeting()
{
    line('Welcome to the Brain Game!');
    $user = prompt('May I have your name?');
    line("Hello, %s!", $user);
    return $user;
}
