<?php

namespace BrainGames\Even;

use function BrainGames\Engine\startGame;

function isPrime($number): bool
{
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function startBrainPrimeGame(): void
{
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $rounds = 3;
    $gameData = [];
    for ($i = 0; $i < $rounds; $i += 1) {
        $number = rand(2, 25);
        $correctAnswer = isPrime($number) ? 'yes' : 'no';
        $gameData[] = [$number, $correctAnswer];
    }
    startGame($rules, $gameData);
}
