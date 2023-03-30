<?php

/**
 * Returns the full name of a month given a month number.
 *
 * @param int $month A month number (1 - 12).
 * @return string The month's full name, e.g. 'January'.
 */
function nameOfMonth(int $month): string
{
    $months = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
    ];
    return $months[$month - 1];
}