<?php

declare(strict_types=1);

namespace Dalanes\SimpleCalculator;

class Calculator
{
    /**
     * @param int $first
     * @param int $second
     * @return int
     */
    public function sum(int $first, int $second): int
    {
        $sum = $first + $second;

        return $sum;
    }
}