<?php

namespace BrainGames\Games\Calc;

use function Games\Engine\logic;

use const Games\Engine\ROUNDS;

function start()
{
    $rule = 'What is the result of the expression?';
    $gameData = [];
    for ($i = 0; $i < ROUNDS; $i += 1) {
        $operations = ['*', '-', '+'];
        $number = array_rand($operations, 1);
        $operation = $operations[$number];
        $firstNumber = rand(1, 25);
        $secondNumber = rand(1, 25);
        $question = "$firstNumber $operation $secondNumber";
        $correctAnswer = calculate($firstNumber, $secondNumber, $operation);
        $gameData[] = ['question' => $question, 'answer' => $correctAnswer];
    }
    logic($gameData, $rule);
}


function calculate(int $firstNumber, int $secondNumber, string $operation)
{
    $correctAnswer = 0;
    switch ($operation) {
        case '-':
            $correctAnswer = $firstNumber - $secondNumber;
            break;
        case '+':
            $correctAnswer = $firstNumber + $secondNumber;
            break;
        case '*':
            $correctAnswer = $firstNumber * $secondNumber;
            break;
        default:
            break;
    }
    return $correctAnswer;
}
