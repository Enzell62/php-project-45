<?php

namespace BrainGames\Games\Progression;

function games_brain_progression()
{
    $number_of_elements = rand(5, 10);
    $step = rand(2, 5);
    $start = rand(0, 100 - ($number_of_elements * $step));
    $hidden_element = rand(1, $number_of_elements);
    $elements = [$start];
    for ($i = 1; $i < $number_of_elements; $i++) {
        $elements[] = $elements[array_key_last($elements)] + $step;
    }
    $answer = $elements[$hidden_element - 1];
    $elements[$hidden_element - 1] = "..";
    $string_of_elements = implode(" ", $elements);
    $question = "Question: {$string_of_elements}" . "\n" . 'Your answer';
    $rules = 'What number is missing in the progression?';
    return [$rules, $question, $answer];
}
