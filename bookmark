<?php

namespace Games\even;

use function cli\line;
use function cli\prompt;

function start()
{
line('Welcome to the Brain Game!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);
line('Answer "yes" if the number is even, otherwise answer "no".');
$score = 0;
for( ; $score <=3; ){
$randomnumber = rand(1,100);
$ournumber = $randomnumber;
line("Question: $ournumber");
$answer = prompt("Your answer");
$correctAnswer = $ournumber % 2 == 0 ? "'yes'" : "'no'";
    if ($ournumber % 2 == 0 && $answer == 'yes'){
        line('Correct!');
        $score++;      
    }elseif ($ournumber % 2 == 1 && $answer == 'no'){
        line('Correct!');
        $score++;
    }else {
        line("'$answer' is wrong answer;(. Correct answer $correctAnswer\n Let's try again, $name");
        return;
    }if ($score == 3){
        line("Congratulations, %s!", $name);
        return;
    }
}
}