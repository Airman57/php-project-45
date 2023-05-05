<?php

namespace BrainGames\Games\Gcd;

use function Games\Engine\logic;

use const Games\Engine\ROUNDS;

function start()
{
    $rule = 'Find the greatest common divisor of given numbers.';
    $gameData = [];
    for ($i = 0; $i < ROUNDS; $i += 1) {
        $firstNumber = rand(1, 100);
        $secondNumber = rand(1, 100);
        $question = "$firstNumber $secondNumber";
        $correctAnswer = getGcd($firstNumber, $secondNumber);
        $gameData[] = ['question' => $question, 'answer' => $correctAnswer];
    }
    logic($gameData, $rule);
}

function getGcd(int $firstNumber, int $secondNumber)
{
    $correctAnswer = 1;
    $minority = min($firstNumber, $secondNumber);
    for ($s = $minority; $s >= 1; $s -= 1) {
        if ($firstNumber % $s === 0 && $secondNumber % $s === 0) {
            $correctAnswer = $s;
            break;
        }
    }
    return $correctAnswer;
}
