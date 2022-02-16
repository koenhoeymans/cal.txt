<?php

namespace Caltxt;

use Prophecy\PhpUnit\ProphecyTrait;

class ConverterTest extends \PHPUnit\Framework\TestCase
{
    use ProphecyTrait;

    private Converter $converter;

    private $parser;

    private $io;

    private string $inputFile = 'foo.txt';

    private string $outputLocation = '.';

    public function setup(): void
    {
        $this->parser = $this->prophesize(CaltxtParser::class);
        $this->io = $this->prophesize(IO::class);
        $this->converter = new Converter(
            $this->parser->reveal(),
            $this->io->reveal()
        );

        $this->inputFile = 'foo.txt';
        $this->outputLocation = '.';
        $this->io->read()->willReturn('foo');
        $this->parser->parse('foo')->willReturn('bar');
    }

    /**
     * @test
     */
    public function it_reads_an_input_file(): void
    {
        $this->converter->convert($this->inputFile, $this->outputLocation);

        $this->io->read($this->inputFile)->shouldHaveBeenCalled();
    }

    /**
     * @test
     */
    public function it_parses_the_content_of_the_input_file(): void
    {
        $this->converter->convert($this->inputFile, $this->outputLocation);

        $this->parser->parse('foo')->shouldHaveBeenCalled();
    }

    /**
     * @test
     */
    public function it_writes_the_parsed_result_as_iCal_data_to_output_file(): void
    {
        $this->converter->convert($this->inputFile, $this->outputLocation);

        $this->io->write('bar', $this->outputLocation)->shouldHaveBeenCalled();
    }
}

