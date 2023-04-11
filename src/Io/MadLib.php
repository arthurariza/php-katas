<?php

namespace Katas\Io;

use InvalidArgumentException;

class MadLib
{
    public static function create(string $noun, string $verb, string $adjective, string $adverb, string $conclusion = 'hilarious'): string
    {
        foreach (func_get_args() as $arg) {
            if (empty($arg)) throw new InvalidArgumentException();
        }

        return "Do you $verb your $adjective $noun $adverb? That's $conclusion!";
    }
}