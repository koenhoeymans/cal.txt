<?php

namespace Caltxt;

use Prophecy\PhpUnit\ProphecyTrait;

class ConverterTest extends \PHPUnit\Framework\TestCase
{
    private Converter $converter;

    private $parser;

    public function setup(): void
    {
        $this->converter = new Converter();
        $this->parser = $this->prophesize(CaltxtParser::class);
    }

    /**
     * @test
     */
    public function it_takes_an_input_file(): void
    {
        $caltxtFile = '';
        $outputLocation = '';
        $contents = '';

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

