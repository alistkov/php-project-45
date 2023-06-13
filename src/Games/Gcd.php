<?php

namespace BrainGames\Gcd;

use function BrainGames\Engine\startGame;

function getGcd(int $firstNumber, int $secondNumber): int
{
    if ($secondNumber === 0) {
        return $firstNumber;
    }
    return getGcd($secondNumber, $firstNumber % $secondNumber);
}

function startBrainGCDGame(): void
{
    $rules = 'Find the greatest common divisor of given numbers.';
    $rounds = 3;
    $gameData = [];
    for ($i = 0; $i < $rounds; $i += 1) {
        $firstRandomNumber = rand(1, 50);
        $secondRandomNumber = rand(1, 50);
        $correctAnswer = getGcd($firstRandomNumber, $secondRandomNumber);
        $question = "{$firstRandomNumber} {$secondRandomNumber}";
        $gameData[] = [$question, (string) $correctAnswer];
    }
    startGame($rules, $gameData);
}
