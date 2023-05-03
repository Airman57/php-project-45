<?php

namespace BrainGames\Games\Prime;

use function Games\Engine\logic;

use const Games\Engine\ROUNDS;

function start()
{
    $rule = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $gameData = [];
    for ($a = 0; $a < ROUNDS; $a++) {
        $num = rand(3, 100);
        $answer = isPrime($num) ? 'yes' : 'no';
        $gameData[] = ['question' => $num, 'answer' => $answer];
    }
    logic($gameData, $rule);
}

function isPrime(int $a)
{
    for ($i = 2; $i < $a; $i++) {
        if ($a % $i == 0) {
            return true;
            break;
        } else {
            return false;
            break;
        }
    }
    
}
