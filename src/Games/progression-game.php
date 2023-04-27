<?php

namespace Games\Progression;

use function Games\engine\Logic;

function start()
{
    $explanation = 'What number is missing in the progression?';
    $str0 = [];
    $str1 = [];
    $str2 = [];
    $startnumber0 = rand(1, 50);
    $diff0 = rand(1, 5);
    $startnumber1 = rand(1, 50);
    $diff1 = rand(1, 5);
    $startnumber2 = rand(1, 50);
    $diff2 = rand(1, 5);
    for ($i = 1; $i < rand(6, 11); $i++) {     
        $question = $startnumber0 + ($i * $diff0);      
        $str0[] = $question;
    }
    for ($i = 1; $i < rand(6, 11); $i++) {
        $question = $startnumber1 + ($i * $diff1);    
        $str1[] = $question;
    }
    for ($i = 1; $i < rand(6, 11); $i++) {
        $question = $startnumber2 + ($i * $diff2);     
        $str2[] = $question;
    }
    $n0 = count($str0) - 1;
    $n1 = count($str1) - 1;
    $n2 = count($str2) - 1;
    $rv0 = rand(0, $n0);
    $rv1 = rand(0, $n1);
    $rv2 = rand(0, $n2);
    $val0 = $str0[$rv0];
    $val1 = $str1[$rv1];
    $val2 = $str2[$rv2];
    $str0[$rv0] = '..';
    $str1[$rv1] = '..';
    $str2[$rv2] = '..';
    $str00 = implode(' ', $str0);
    $str01 = implode(' ', $str1);
    $str02 = implode(' ', $str2);
    $arra = [$val0, $val1, $val2];
    $arrq = [$str00, $str01, $str02];
    Logic($arra, $arrq, $explanation);
}
