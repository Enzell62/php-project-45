<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function run_question(callable $name_game)
{
    [$rules, $question, $answer] = $name_game();
    $gamers_answer = prompt($question);
    if ($gamers_answer == $answer) {
        return "Correct!";
    } else {
        return line("'{$gamers_answer}' is wrong answer ;(. Correct answer was '{$answer}'.");
    }
}

function run_game(callable $name_game)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    [$rules, $question, $answer] = $name_game();
    line($rules);
    $number_of_repeat = 3;
    for ($i = $number_of_repeat; $i > 0; $i--) {
        $result = (run_question($name_game));
        if ($result !== "Correct!") {
            break;
        }
        line($result);
    }
    if ($result == "Correct!") {
        line('Congratulations, %s!', $name);
    } else {
        line("Let's try again, {$name}!");
    }
}
