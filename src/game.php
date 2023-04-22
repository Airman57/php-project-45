<?php

namespace BrainGames\even;

use function cli\line;
use function cli\prompt;

function welcome(array $smthng)
{
line('Welcome to the Brain Game!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);
}

function question()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $answer = prompt($ournumber);
    line("Your answer: $answer");
}
