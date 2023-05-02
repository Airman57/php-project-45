<?php

namespace BrainGames\Games\Gcd;

use function Games\Engine\logic;

function start()
{
    $explanation = 'Find the greatest common divisor of given numbers.';
    $gameData = [];
    for ($i = 0; $i < 3; $i++) {
        $a = rand(1, 100);
        $b = rand(1, 100);
        $correctAnswer = 1;
        $question = "$a $b";
        $correctAnswer = getGcd($a, $b);
        $gameData[] = ['question' => $question, 'answer' => $correctAnswer];
    }
    logic($gameData, $explanation);
}

function getGcd($a, $b)
{
    if ($a > $b) {
        $cycle = $b;
    } else {
        $cycle = $a;
    } for ($s = $cycle; $s >= 1; $s--) {
        if ($a % $s === 0 && $b % $s === 0) {
            $correctAnswer = $s;
            break;
        }
    }
    return $correctAnswer;
}
