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
        if ($a > $b) {
            $cicle = $b;
        } else {
            $cicle = $a;
        } for ($s = $cicle; $s >= 1; $s--) {
            if ($a % $s === 0 && $b % $s === 0) {            
            $correctanswer = $s;
              break;
            }
          }
        $arrq[] = $question;
        $arra[] = $correctanswer;
    }
    Logic($arra, $arrq, $explanation);
}
        
