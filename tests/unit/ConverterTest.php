<?php

namespace Caltxt;

use Prophecy\PhpUnit\ProphecyTrait;

class ConverterTest extends \PHPUnit\Framework\TestCase
{
    use ProphecyTrait;

    private Converter $converter;

    private $parser;

    private $io;

    public function setup(): void
    {
        $this->parser = $this->prophesize(Parser::class);
        $this->io = $this->prophesize(IO::class);
        $this->converter = new Converter(
            $this->parser->reveal(),
            $this->io->reveal()
        );
    }

    /**
     * @test
     */
    public function it_takes_an_input_file_and_transforms_to_ics_file_at_chosen_location(): void
    {
        // given
        $this->io->read('foo.txt')->willReturn('foo');
        $this->parser->parse('foo')->willReturn('bar');

        // when
        $this->converter->convert('foo.txt', '.');

        // then
        $this->io->read('foo.txt')->shouldHaveBeenCalled();
        $this->io->write('bar', '.')->shouldHaveBeenCalled();
    }
}

