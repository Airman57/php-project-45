<?php

namespace Games\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function logic(array $gameData, string $rule)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($rule);
    foreach ($gameData as $value) {
        $question = "Question: " . $value['question'];
        $correctAnswer = $value['answer'];
        line($question);
        $answer = prompt("Your answer");
        if ($answer == $correctAnswer) {
            line('Correct!');
        } else {
            line("'$answer' is wrong answer;(. Correct answer '$correctAnswer'\n/Let's try again, $name!/");
            return;
        }                  
    }
    return line("Congratulations, %s!", $name); 
}
