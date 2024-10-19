<?php

namespace BrainGames\Games\Prime;

function check_simple(int $n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return "no";
        }
    }
    return "yes";
}

function games_brain_prime()
{
    $a = rand(2, 100);
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $question = "Question: {$a}" . "\n" . 'Your answer';
    $answer = check_simple($a);
    return [$rules, $question, $answer];
}
