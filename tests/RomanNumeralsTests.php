<?php


use App\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTests extends TestCase
{
    public static function romanNumeralProvider(): array
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [9, 'IX'],
            [10, 'X'],
            [49, 'XLIX'],
            [50, 'L'],
            [99, 'XCIX'],
            [100, 'C'],
            [499, 'CDXCIX'],
            [500, 'D'],
            [999, 'CMXCIX'],
            [1000, 'M'],
            [1546, 'MDXLVI'],
            [3999, 'MMMCMXCIX'],
            [66, 'LXVI'],
        ];
    }

    /**
     * @dataProvider romanNumeralProvider
     */
    public function test_it_generates_roman_numerals(int $integer, string $romanNumeral)
    {
        $numeral = RomanNumerals::generate($integer);

        $this->assertEquals($romanNumeral, $numeral);
    }

    public function test_integer_must_be_greater_then_0()
    {

        $numeral = RomanNumerals::generate(0);

        $this->assertEquals(false, $numeral);

    }

    public function test_integer_must_be_smaller_then_3999()
    {

        $numeral = RomanNumerals::generate(4000);

        $this->assertEquals(false, $numeral);

    }
}
