<?php

namespace BrainGames\Games\Even;

use function Games\Engine\logic;

function start()
{
    $explanation = 'Answer "yes" if the number is even, otherwise answer "no".';
    $gameData = [];
    for ($i = 0; $i < 3; $i++) {
        $randomNumber = rand(1, 100);
        $correctAnswer = isEven($randomNumber);
        $gameData[] = ['question' => $randomNumber, 'answer' => $correctAnswer];
    }
        logic($gameData, $explanation);
}

function isEven(int $a)
{
    $even = '';
    $even = ($a % 2 == 0) ? 'yes' : 'no';
    return $even;
}
