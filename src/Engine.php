<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function startGame(string $rules, array $rounds): void
{
    line("Welcome to the Brain Game!");
    $userName = prompt("May I have your name?");
    line("Hello, %s!", $userName);
    line($rules);

    foreach ($rounds as $round) {
        [$question, $correctAnswer] = $round;

        line($question);
        $userAnswer = prompt("Your answer");

        if ($userAnswer === $correctAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $userName);
            return;
        }
    }
    line("Congratulations, %s!", $userName);
}
