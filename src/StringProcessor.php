<?php

declare(strict_types=1);

namespace KLobkovsky\Hw3Package;

class StringProcessor
{
    public function getDigitCount(string $s): int
    {
        $digitCount = 0;

        foreach (str_split($s) as $char) {
            if (is_numeric($char)) {
                $digitCount++;
            }
        }

        return $digitCount;
    }
}