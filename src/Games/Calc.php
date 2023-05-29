<?php

namespace BrainGames\Even;

use function BrainGames\Engine\startGame;

function getOperationAndResult(int $firstNumber, int $secondNumber,): array
{
    $operations = ['+', '-', '*'];
    $index = rand(0, 2);
    $operation = $operations[$index];

    switch ($operation) {
        case '+':
            return [$operation, $firstNumber + $secondNumber];
        case '-':
            return [$operation, $firstNumber - $secondNumber];
        case '*':
            return [$operation, $firstNumber * $secondNumber];
    }
}

function startBrainCalcGame(): void
{
    $rules = 'What is the result of the expression?';
    $rounds = 3;
    $gameData = [];
    for ($i = 0; $i < $rounds; $i += 1) {
        $randNum = rand(0, 100);
        $randNum2 = rand(0, 100);
        [$operation, $correctAnswer] = getOperationAndResult($randNum, $randNum2);
        $question = "{$randNum} {$operation} {$randNum2}";
        $gameData[] = [$question, (string) $correctAnswer];
    }
    startGame($rules, $gameData);
}
