<?php

namespace BrainGames\Games\Even;

function games_brain_even()
{
    $number = rand(1, 100);
    $answer = $number % 2 == 0 ? "yes" : "no";
    $rules = 'Answer "yes" if the number is even, otherwise answer "no"';
    $question = "Question: {$number}" . "\n" . 'Your answer';
    return [$rules, $question, $answer];
}
