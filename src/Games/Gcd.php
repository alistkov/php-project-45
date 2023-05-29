<?php

namespace BrainGames\Even;

use function BrainGames\Engine\startGame;

function startBrainGCDGame(): void
{
    $rules = 'Find the greatest common divisor of given numbers.';
    $rounds = 3;
    $gameData = [];
    for ($i = 0; $i < $rounds; $i += 1) {
        $firstRandomNumber = rand(1, 50);
        $secondRandomNumber = rand(1, 50);
        $correctAnswer = gmp_gcd($firstRandomNumber, $secondRandomNumber);
        $question = "{$firstRandomNumber} {$secondRandomNumber}";
        $gameData[] = [$question, (string) $correctAnswer];
    }
    startGame($rules, $gameData);
}
