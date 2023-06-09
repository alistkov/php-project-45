<?php

namespace BrainGames\Even;

use function BrainGames\Engine\startGame;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function startBrainEvenGame(): void
{
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';
    $rounds = 3;
    $gameData = [];
    for ($i = 0; $i < $rounds; $i += 1) {
        $randNum = rand(0, 100);
        $correctAnswer = isEven($randNum) ? 'yes' : 'no';
        $gameData[] = [$randNum, $correctAnswer];
    }
    startGame($rules, $gameData);
}
