<?php


use Katas\Io\MadLib;
use PHPUnit\Framework\TestCase;

class MadLibTest extends TestCase
{
    /** @test */
    public function it_creates_a_simple_mad_lib_program(): void
    {
        $noun = 'dog';
        $verb = 'walk';
        $adjective = 'blue';
        $adverb = 'quickly';

        $result = MadLib::create($noun, $verb, $adjective, $adverb);

        $this->assertEquals("Do you walk your blue dog quickly? That's hilarious!", $result);
    }

    /** @test */
    public function it_requires_a_noun_verb_adjective_and_adverb(): void
    {
        $this->expectException(InvalidArgumentException::class);

        MadLib::create('', '', '', '');
    }

    /** @test */
    public function it_accepts_an_optional_conclusion(): void
    {
        $noun = 'dog';
        $verb = 'walk';
        $adjective = 'blue';
        $adverb = 'quickly';
        $conclusion = 'great';

        $result = MadLib::create($noun, $verb, $adjective, $adverb, $conclusion);

        $this->assertEquals("Do you walk your blue dog quickly? That's great!", $result);
    }
}
