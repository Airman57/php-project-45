<?php

namespace BrainGames\Games\Prime;

use function Games\Engine\logic;

function start()
{
    $explanation = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $gameData = [];
    for ($a = 0; $a < 3; $a++) {
        $num = rand(3, 100);
        $answer = isPrime($num);
        $gameData[] = ['question' => $num, 'answer' => $answer];
    }
    logic($gameData, $explanation);
}

function isPrime($a)
{
    $answer = '';
    for ($i = 2; $i < $a; $i++) {
        if ($a % $i === 0) {
            $answer = 'no';
            break;
        } else {
            $answer = 'yes';
        }
    }
    return $answer;
}
