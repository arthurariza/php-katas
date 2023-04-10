<?php


use Katas\Io\CharacterCounter;
use phpmock\phpunit\PHPMock;
use PHPUnit\Framework\TestCase;

class CharacterCounterTest extends TestCase
{
    use PHPMock;

    private $readline;

    protected function setUp(): void
    {
        $this->readline = $this->getFunctionMock('Katas\Io', "readline")
                               ->expects($this->once())
                               ->with(CharacterCounter::PROMPT_MESSAGE);
    }

    /** @test */
    public function it_counts_the_number_of_characters(): void
    {
        $this->readline->willReturn("Homer");

        CharacterCounter::count();

        $this->expectOutputString('Homer has 5 characters.');
    }

    /** @test */
    public function it_trims_the_input_string(): void
    {
        $this->readline->willReturn("Homer      ");

        CharacterCounter::count();

        $this->expectOutputString('Homer has 5 characters.');
    }

    /** @test */
    public function it_asks_for_a_valid_input_string(): void
    {
        $this->readline->willReturn("");

        CharacterCounter::count();

        $this->expectOutputString(CharacterCounter::ERROR_MESSAGE);
    }
}
