<?php

declare(strict_types=1);

namespace KLobkovsky\Hw3Package;

class StringProcessor
{
    public function getDigitCount(string $s): int
    {
        $matches = [[]];
        preg_match_all('/\d/', $s, $matches);
        return count($matches[0]);
    }
}