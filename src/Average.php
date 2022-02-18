<?php

namespace drmonkeyninja;

class Average
{
    /**
     * Calculate the mean average
     * @param array $numbers Array of numbers
     * @return float Mean average
     */
    public function mean(array $numbers): float
    {
        return array_sum($numbers) / count($numbers);
    }

    /**
     * Calculate the median average
     * @param array $numbers Array of numbers
     * @return float Median average
     */
    public function median(array $numbers): float
    {
        sort($numbers);
        $size = count($numbers);
        if ($size % 2) {
            return $numbers[$size / 2];
        }
        return $this->mean(
                array_slice($numbers, ($size / 2) - 1, 2)
            );
    }
    /**
     * Calculate the median average
     * @param array $numbers Array of numbers
     * @return float Median average
     */
    public function mode(array $numbers): int
    {
        $values = array_count_values($numbers);
        return array_search(max($values), $values);
    }
}
