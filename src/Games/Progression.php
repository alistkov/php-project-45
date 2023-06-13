<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\startGame;

function createProgression(): array
{
    $progression = [];
    $count = rand(5, 10);
    $missingIndex = rand(0, $count);
    $startValue = rand(2, 10);
    $step = rand(2, 10);
    $missingElement = null;

    for ($i = 0; $i <= $count; $i += 1) {
        if ($i === $missingIndex) {
            $progression[] = '..';
            $missingElement = $startValue + $step * $i;
        } else {
            $progression[] = $startValue + $step * $i;
        }
    }
    return [$progression, $missingElement];
}

function startBrainProgressionGame(): void
{
    $rules = 'What number is missing in the progression?';
    $rounds = 3;
    $gameData = [];
    for ($i = 0; $i < $rounds; $i += 1) {
        [$progression, $missingElement] = createProgression();
        $question = implode(' ', $progression);
        $correctAnswer = (string) $missingElement;
        $gameData[] = [$question, $correctAnswer];
    }
    startGame($rules, $gameData);
}
