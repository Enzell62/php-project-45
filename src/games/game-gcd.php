<?php

namespace BrainGames\Games\Gcd;

function check_gcd(int $a, int $b)
{
    $smallest = $a < $b ? $a : $b;
    $result = 1;
    for ($i = 1; $i <= $smallest; $i++) {
        if ($a % $i == 0 && $b % $i == 0) {
            $result = $result < $i ? $i : $result;
        }
    }
    return $result;
}

function games_brain_gcd()
{
    $a = rand(1, 100);
    $b = rand(1, 100);
    $rules = 'Find the greatest common divisor of given numbers.';
    $question = "Question: {$a} {$b}" . "\n" . 'Your answer';
    $answer = check_gcd($a, $b);
    return [$rules, $question, $answer];
}
