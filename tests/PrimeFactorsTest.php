<?php

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    public static function factorsProvider(): array
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [6, [2, 3]],
            [8, [2, 2, 2]],
            [9, [3, 3]],
            [18, [2, 3, 3]],
            [25, [5, 5]],
            [64, [2, 2, 2, 2, 2, 2]],
            [74, [2, 37]]
        ];
    }

    /**
     * @testdox The prime factors of $integer are $result
     * @dataProvider factorsProvider
     */
    public function test_prime_factors(int $integer, array $result)
    {
        $factors = PrimeFactors::of($integer);

        $this->assertEquals($result, $factors);
    }
}
