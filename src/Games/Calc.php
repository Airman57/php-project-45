<?php

namespace BrainGames\Games\Calc;

use function Games\Engine\logic;

function start()
{
    $explanation = 'What is the result of the expression?';
    $gameData = [];    
    for ($i = 0; $i < 3; $i++) {
        $operations = ['*', '-', '+'];
        $number = mt_rand(0, 2);
        $operation = $operations[$number];
        $a = rand(1, 25);
        $b = rand(1, 25);
        $question = "$a $operation $b";
        switch ($operation) {
            case '-':
                $correctAnswer = $a - $b;
                break;
            case '+':        
                $correctAnswer = $a + $b;
                break;
            case '*':
                $correctAnswer = $a * $b;
                break;
        }
    $gameData[] = ['question' => $question, 'answer' => $correctAnswer];
    }
    logic($gameData, $explanation);
}
