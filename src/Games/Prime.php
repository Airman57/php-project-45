<?php

namespace BrainGames\Games\Prime;

use function Games\Engine\logic;

use const Games\Engine\ROUNDS;

function start()
{
    $rule = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $gameData = [];
    for ($a = 0; $a < ROUNDS; $a += 1) {
        $num = rand(1, 100);
        $answer = isPrime($num) ? 'yes' : 'no';
        $gameData[] = ['question' => $num, 'answer' => $answer];
    }
    logic($gameData, $rule);
}

function isPrime(int $num)
{
    if ($num == 1) {
        return false;
    }
    for ($s = 2; $s < $num; $s += 1) {
        if ($num % $s == 0 && $num !== 2) {
            return false;
        }
    }
    return true;
}
