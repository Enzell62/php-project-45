<?php

namespace BrainGames\Games\Calc;

function games_brain_calc()
{
    $a = rand(1, 100);
    $b = rand(1, 100);
    $operations_list = [
        "+" => function ($a, $b) {
            return $a + $b;
        },
        "-" => function ($a, $b) {
            return $a - $b;
        },
        "*" => function ($a, $b) {
            return $a * $b;
        }];
    $func = array_rand($operations_list);
    $rules = 'What is the result of the expression?';
    $question = "Question: {$a} {$func} {$b}" . "\n" . 'Your answer';
    $answer = $operations_list[$func]($a, $b);
    return [$rules, $question, $answer];
}
