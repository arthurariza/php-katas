<?php

namespace Katas;

class SayHello
{
    const INVALID_NAME_MESSAGE = 'Please, provide a valid name.';

    public static function hello(): void
    {
        $capitalizedName = trim(ucwords(readline('What is your name?')));

        if (empty($capitalizedName)) {
            echo self::INVALID_NAME_MESSAGE;
            return;
        }

        echo "Hello, {$capitalizedName}, nice to meet you!";
    }
}