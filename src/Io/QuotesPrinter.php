<?php

namespace Katas\Io;

use InvalidArgumentException;

class QuotesPrinter
{
    public static function print(string $author, string $quote): string
    {
        if (empty($author) or empty($quote)) {
            throw new InvalidArgumentException('Please, provide an author and a quote.');
        }

        return $author . " says, \"" . $quote . "\"";
    }
}