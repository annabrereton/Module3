<?php

/**
 * Returns twice a given value.
 *
 * Only operates on positive integers.
 *
 * @param int $input A value to be processed.
 * @return int The parameter doubled.
 * @throws InvalidArgumentException if parameter less than zero.
 */
function multiplyByTwo(int $input): int
{
    if ($input < 0) {
        throw new InvalidArgumentException("Value out of range ");
    }

    return $input * 2;
}

function addLeadingZeroes(string $number, int $size): string
{
    return str_pad($number, $size, '0', STR_PAD_LEFT);
}