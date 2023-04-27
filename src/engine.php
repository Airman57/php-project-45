<?php

namespace Games\engine;

use function cli\line;
use function cli\prompt;

function Logic(array $arra, array $arrq, $explanation)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($explanation);
    $score = 0;
    for ($i = 0; $score <= 3; $i++) {
        line("Question: $arrq[$i]");
        $answer = prompt("Your answer");
        if ($answer == $arra[$i]) {
            line('Correct!');
            $score++;
        } else {
            line("'$answer' is wrong answer;(. Correct answer '$arra[$i]'\n Let's try again, $name");
            return;
        }if ($score == 3) {
            line("Congratulations, %s!", $name);
            return;
        }
    }
}
