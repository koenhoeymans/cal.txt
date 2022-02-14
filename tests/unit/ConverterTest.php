<?php

namespace Caltxt;

use Prophecy\PhpUnit\ProphecyTrait;

class ConverterTest extends \PHPUnit\Framework\TestCase
{
    use ProphecyTrait;

    private Converter $converter;

    private $parser;

    public function setup(): void
    {
        $this->parser = $this->prophesize(CaltxtParser::class);
        $this->converter = new Converter($this->parser->reveal());
    }

    /**
     * @test
     */
    public function it_takes_an_input_file(): void
    {
        $caltxtFile = 'cal.txt';
        $outputLocation = 'cal.ics';
        $contents = 'foo';

        $this->converter->convert($caltxtFile, $outputLocation);

        $this->parser->parse($contents)->shouldHaveBeenCalled();
    }

    /**
     * @test
     */
    public function it_parses_the_input_files_content_to_iCalendar(): void
    {
        $this->markTestIncomplete();
    }

    /**
     * @test
     */
    public function it_writes_iCalendar_to_ics_file(): void
    {
        $this->markTestIncomplete();
    }
}

