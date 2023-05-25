<?php

/**
 * @link       https://leetcode.com/problems/roman-to-integer
 * @difficulty EASY
 */
class Solution
{
    /**
     * @var array|int[]
     */
    protected array $romans = [
        'M'  => 1000,
        'CM' => 900,
        'D'  => 500,
        'CD' => 400,
        'C'  => 100,
        'XC' => 90,
        'L'  => 50,
        'XL' => 40,
        'X'  => 10,
        'IX' => 9,
        'V'  => 5,
        'IV' => 4,
        'I'  => 1,
    ];

    /**
     * @param  string $roman
     * @return int
     */
    public function romanToInt(string $roman) : int
    {
        $numeric = 0;
        $length = strlen($roman);

        for ($i = 0; $i < $length; $i++) {
            if ($i + 1 < $length && isset($this->romans[$roman[$i] . $roman[$i + 1]])) {
                $numeric += $this->romans[$roman[$i] . $roman[$i + 1]];
                $i++;
            } else {
                $numeric += $this->romans[$roman[$i]];
            }
        }

        return $numeric;
    }
}
