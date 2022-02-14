<?php

namespace Caltxt;

class CaltxtParserTest extends \PHPUnit\Framework\TestCase
{
    private CaltxtParser $parser;

    public function setup(): void
    {
        $this->parser = new CaltxtParser();
    }

    /**
     * @test
     */
    public function it_parses_a_single_event(): void
    {
        $event = $this->parser->parse($caltxt);
    }
}

