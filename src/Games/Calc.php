<?php

namespace BrainGames\Games\Calc;

use function Games\Engine\logic;

function start()
{
    $explanation = 'What is the result of the expression?';
    $gameData = [];
    for ($i = 0; $i < 3; $i++) {
        $operations = ['*', '-', '+'];
        $number = mt_rand(0, 2);
        $operation = $operations[$number];
        $a = rand(1, 25);
        $b = rand(1, 25);
        $question = "$a $operation $b";
        $correctAnswer = calculate($a, $b, $operation);
        $gameData[] = ['question' => $question, 'answer' => $correctAnswer];
    }
    logic($gameData, $explanation);
}


function calculate(int $a, int $b, string $operation)
{
    $correctAnswer = 0;
    switch ($operation) {
        case '-':
            $correctAnswer = $a - $b;
            break;
        case '+':
            $correctAnswer = $a + $b;
            break;
        case '*':
            $correctAnswer = $a * $b;
            break;
    }
    return $correctAnswer;
}
