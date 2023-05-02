<?php

namespace Games\Engine;

use function cli\line;
use function cli\prompt;

function logic(array $gameData, string $explanation)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($explanation);
    for ($i = 0; $i < 3; $i++) {
        $question = "Question: " . $gameData[$i]['question'];
        $correctAnswer = $gameData[$i]['answer'];
        line($question);
        $answer = prompt("Your answer");
        if ($answer == $gameData[$i]['answer']) {
            line('Correct!');
        } else {
            line("'$answer' is wrong answer;(. Correct answer '$correctAnswer'\n/Let's try again, $name!/");
            return;
        }if ($i == 2) {
            line("Congratulations, %s!", $name);
            return;
        }
    }
}
