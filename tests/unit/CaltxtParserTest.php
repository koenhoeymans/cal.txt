<?php

namespace Caltxt;

class CaltxtParserTest extends \PHPUnit\Framework\TestCase
{
    private CaltxtParser $parser;

    private $icsStart = "BEGIN:VCALENDAR
VERSION:2.0
PRODID:cal.txt text to ics convertor
";

    private $icsEnd = "END:VEVENT
END:VCALENDAR";

    public function setup(): void
    {
        $this->parser = new CaltxtParser();
    }

    /**
     * @test
     */
    public function it_parses_a_single_item()
    {
        $caltxt = "foo
20220101
  - starting a new year";
        $ics = $this->icsStart . "BEGIN:VEVENT
UID:koen.hoeymans@example.com
DTSTAMP:20220101T000000
DTSTART:20220101T000000
SUMMARY:starting a new year
END:VEVENT
" . $this->icsEnd;

        $this->assertEquals($ics, $this->parser->parse($caltxt));
    }
}

