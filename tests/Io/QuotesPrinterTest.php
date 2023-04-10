<?php


use Katas\Io\QuotesPrinter;
use PHPUnit\Framework\TestCase;

class QuotesPrinterTest extends TestCase
{
    /** @test */
    public function it_prints_a_quote(): void
    {
        $quote = "These aren't the droids you're looking for.";
        $author = "Obi-Wan Kenobi";

        $this->assertEquals("Obi-Wan Kenobi says, \"These aren't the droids you're looking for.\"", QuotesPrinter::print($author, $quote));
    }

    /** @test */
    public function it_requires_an_author_and_a_quote(): void
    {
        $this->expectException(InvalidArgumentException::class);

        QuotesPrinter::print('', '');
    }
}
