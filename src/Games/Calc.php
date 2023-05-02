<?php

namespace BrainGames\Games\Calc;

use function Games\Engine\logic;

use const Games\Engine\ROUNDS;

function start()
{
    $rule = 'What is the result of the expression?';
    $gameData = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $operations = ['*', '-', '+'];
        $number = array_rand($operations, 1);
        $operation = $operations[$number];
        $a = rand(1, 25);
        $b = rand(1, 25);
        $question = "$a $operation $b";
        $correctAnswer = calculate($a, $b, $operation);
        $gameData[] = ['question' => $question, 'answer' => $correctAnswer];
    }
    logic($gameData, $rule);
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
