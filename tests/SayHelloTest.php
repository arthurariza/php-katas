<?php


use Katas\SayHello;
use phpmock\phpunit\PHPMock;
use PHPUnit\Framework\TestCase;

class SayHelloTest extends TestCase
{
    use PHPMock;

    private $readline;

    protected function setUp(): void
    {
        $this->readline = $this->getFunctionMock('Katas', "readline");
    }

    /** @test */
    public function it_says_hello_to_brian(): void
    {
        $this->readline->expects($this->once())->with("What is your name?")->willReturn("Brian");

        SayHello::hello();

        $this->expectOutputString('Hello, Brian, nice to meet you!');
    }

    /** @test */
    public function it_says_hello_to_john(): void
    {
        $this->readline->expects($this->once())->with("What is your name?")->willReturn("John");

        SayHello::hello();

        $this->expectOutputString('Hello, John, nice to meet you!');
    }

    /** @test */
    public function it_capitalizes_the_name(): void
    {
        $this->readline->expects($this->once())->with("What is your name?")->willReturn("jane");

        SayHello::hello();

        $this->expectOutputString('Hello, Jane, nice to meet you!');
    }

    /** @test */
    public function it_trims_the_name(): void
    {
        $this->readline->expects($this->once())->with("What is your name?")->willReturn("Doe    ");

        SayHello::hello();

        $this->expectOutputString('Hello, Doe, nice to meet you!');
    }

    /** @test */
    public function it_asks_for_a_valid_name_if_none_is_given(): void
    {
        $this->readline->expects($this->once())->with("What is your name?")->willReturn("");

        SayHello::hello();

        $this->expectOutputString(SayHello::INVALID_NAME_MESSAGE);
    }
}
