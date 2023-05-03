<?php

namespace BrainGames\Games\Even;

use function Games\Engine\logic;

use const Games\Engine\ROUNDS;

function start()
{
    $rule = 'Answer "yes" if the number is even, otherwise answer "no".';
    $gameData = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $randomNumber = rand(1, 100);
        $correctAnswer = isEven($randomNumber) ? 'yes' : 'no';
        $gameData[] = ['question' => $randomNumber, 'answer' => $correctAnswer];
    }
        logic($gameData, $rule);
}

function isEven(int $number)
{
    if ($number % 2 == 0) {
        return true;
    }
    return false;
}
