<?php

namespace Games\gcd;

use function Games\engine\Logic;

function start()
{
    $explanation = 'Find the greatest common divisor of given numbers.';
    $arra = [];
    $arrq = [];
    for ($i = 0; $i < 3; $i++) {
        $a = rand(1, 100);
        $b = rand(1, 100);
        $question = "$a $b";
        $correctanswer = gmp_gcd($a, $b);
        $arrq[] = $question;
        $arra[] = $correctanswer;
    }
    Logic($arra, $arrq, $explanation);
}