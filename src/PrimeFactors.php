<?php

namespace App;

class PrimeFactors
{
    public static function of(int $integer): array
    {
        $primeFactors = [];

        for ($i = 2; $integer > 1; $i++) {
            for (; $integer % $i == 0; $integer /= $i) {
                $primeFactors[] = $i;
            }
        }


        return $primeFactors;
    }
}