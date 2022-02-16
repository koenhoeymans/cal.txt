<?php

namespace Caltxt;

/**
 * Creates an iCalendar file from a given [cal.txt][] file. A target location
 * needs to be specified.
 *
 * [cal.txt]: https://github.com/koenhoeymans/cal.txt
 */
class Converter
{
    private CaltxtParser $parser;

    public function __construct(CaltxtParser $parser)
    {
        $this->parser = $parser;
    }

    public function convert(string $sourceFile, string $targetFile): void
    {
        $data = 'foo';
        $iCalData = $this->parser->parse($data);
    }
}
