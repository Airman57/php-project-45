<?php

namespace Games\even;

use function Games\engine\Logic;

function start()
{
    $explanation = 'Answer "yes" if the number is even, otherwise answer "no".';
    $arrq = [];
    $arra = [];
    for ($i = 0; $i < 3; $i++) {
        $randomnumber = rand(1, 100);
        $correctAnswer = ($randomnumber % 2 == 0) ? 'yes' : 'no';
        $arrq[] = $randomnumber;
        $arra[] = $correctAnswer;
    }
        Logic($arra, $arrq, $explanation);
}
