<?php

namespace Games\Prime;

use function Games\engine\Logic;

function start()
{
    $explanation = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $arra = [];
    $arrq = [];
    for ($a = 0; $a < 3; $a++) {
    $num = rand(1, 100);	
	for ($i = 2; $i < $num; $i++) {
		if ($num % $i === 0) {
			$answer = 'no';
			break;
		}else {
            $answer = 'yes';
        }        
	}
    $arra[] = $answer;
    $arrq[] = $num;
}
Logic($arra, $arrq, $explanation);
}

	
