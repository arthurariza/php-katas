<?php

namespace Katas;

class SayHello
{
    const INVALID_NAME_MESSAGE = 'Please, provide a valid name.';
    const PROMPT_MESSAGE = 'What is your name?';

    public static function hello(): void
    {
        $capitalizedName = trim(ucwords(readline(self::PROMPT_MESSAGE)));

        if (empty($capitalizedName)) {
            echo self::INVALID_NAME_MESSAGE;
            return;
        }

        echo "Hello, {$capitalizedName}, nice to meet you!";
    }
}