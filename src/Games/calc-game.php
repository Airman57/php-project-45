<?php

namespace Games\Calc;

use function Games\engine\Logic;

function start()
{
    $explanation = 'What is the result of the expression?';
    $arrq = [];
    $arra = [];
    for ($i = 0; $i < 3; $i++) {
        $operations = ['*', '-', '+'];
        $number = mt_rand(0, 2);
        $operation = $operations[$number];
        $a = rand(1, 25);
        $b = rand(1, 25);
        $question = "$a $operation $b";
        if ($operation == "-") {
            $correctanswer = $a - $b;
        } elseif ($operation == "+") {
            $correctanswer = $a + $b;
        } elseif ($operation == "*") {
            $correctanswer = $a * $b;
        }
                $arrq[] = $question;
                $arra[] = $correctanswer;
    }
    Logic($arra, $arrq, $explanation);
}
