<?php

declare(strict_types=1);

/*
 * Iterate over the numbers from 1 to 100 and write the number except in the following cases:
 * If the number is divisible by both 5 and 3, write "A"
 * If the number is divisible by 5 but not by 3, write "B"
 * If the number is divisible by 3, write "C"
 */
function iretateNumbers(): void
{
    echo '--- START ---' . "\n";

    for ($i = 1; $i <= 100; ++$i) {
        echo getValue($i);
    }

    echo '--- END ---' . "\n";
}

function getValue(int $i): string
{
    $mod3 = 0 === $i % 3;
    $mod5 = 0 === $i % 5;

    return match (true) {
            $mod5 && $mod3 => 'A',
            $mod5 => 'B',
            $mod3 => 'C',
            default => $i,
        } . "\n";
}

iretateNumbers();
