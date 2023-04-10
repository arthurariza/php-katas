<?php

namespace Katas\Io;

class CharacterCounter
{
    const PROMPT_MESSAGE = 'What is the input string?';
    const ERROR_MESSAGE = 'Please, provide a valid input string.';

    public static function count(): void
    {
        $string = trim(readline(self::PROMPT_MESSAGE));

        if (empty($string)) {
            echo self::ERROR_MESSAGE;
            return;
        }

        echo "$string has " . strlen($string) . " characters.";
    }
}