<?php

namespace BrainGames\Games\Progression;

use function Games\Engine\logic;

function start()
{
    $explanation = 'What number is missing in the progression?';
    $gameData = [];
    for ($a = 0; $a < 3; $a++) {
        $progression = [];
        $startNumber = rand(1, 50);
        $diff = rand(1, 8);
        for ($i = 1; $i < rand(6, 11); $i++) {
            $question = $startNumber + ($i * $diff);
            $progression[] = $question;
        }
            $size = count($progression) - 1;
            $randomSymbol = rand(0, $size);
            $symbol = $progression[$randomSymbol];
            $progression[$randomSymbol] = '..';
            $questionProgression = implode(' ', $progression);
            $gameData[] = ['question' => $questionProgression, 'answer' => $symbol];
    }
    logic($gameData, $explanation);
}
