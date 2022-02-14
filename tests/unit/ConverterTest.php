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
    public function it_parses_a_file(): void
    {
        $caltxtFile = '';
        $outputLocation = '';
        $contents = '';

        $this->converter->convert($caltxtFile, $outputLocation);
        $this->parser->parse($contents)->shouldHaveBeenCalled();
    }
}

