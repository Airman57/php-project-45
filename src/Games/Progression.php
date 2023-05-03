<?php

namespace BrainGames\Games\Progression;

use function Games\Engine\logic;

use const Games\Engine\ROUNDS;

function start()
{
    $rule = 'What number is missing in the progression?';
    $gameData = [];
    for ($a = 0; $a < ROUNDS; $a++) {
        $progression = makeProgression();
        $randomSymbol = rand(0, count($progression) - 1);
        $symbol = $progression[$randomSymbol];
        $progression[$randomSymbol] = '..';
        $questionProgression = implode(' ', $progression);
        $gameData[] = ['question' => $questionProgression, 'answer' => $symbol];
    }
    logic($gameData, $rule);
}

function makeProgression()
{
    $progression = [];
    $startNumber = rand(1, 50);
    $diff = rand(1, 8);
    for ($i = 1; $i < rand(6, 11); $i++) {
        $progression[] = $startNumber + $i * $diff;
    }
    return $progression;
}
