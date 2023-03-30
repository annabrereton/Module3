<?php

function removeNamesStartingWithA(array $names): array
{
    $namesNotStartingWithA = [];
    foreach ($names as $name) {
        if ($name[0] !== 'A') {
            $namesNotStartingWithA[] = $name;
        }
    }
    return $namesNotStartingWithA;
}

function stripNamesStartingWithA(string $namesStr): string
{
    $names = explode(',', $namesStr);
    $namesNotStartingWithA = removeNamesStartingWithA($names);
    return implode(',', $namesNotStartingWithA);
}

function isSquareNum(int $num): bool
{
    if ($num < 0) {
        return false;
    }

    return floor(sqrt($num)) * sqrt($num) == $num;
}
