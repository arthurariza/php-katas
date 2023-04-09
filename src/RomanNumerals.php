<?php

namespace Katas;

class RomanNumerals
{
    const ROMAN_NUMERALS = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];

    public static function generate(int $integer): string
    {
        if ($integer <= 0 || $integer > 3999) {
            return false;
        }

        $romanNumeral = '';

        foreach (static::ROMAN_NUMERALS as $roman => $arabic) {
            for (; $integer >= $arabic; $integer -= $arabic) {
                $romanNumeral .= $roman;
            }
        }

        return $romanNumeral;
    }
}