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
    private Parser $parser;

    private IO $io;

    public function __construct(Parser $parser, IO $io)
    {
        $this->parser = $parser;
        $this->io = $io;
    }

    public function convert(string $sourceFile, string $targetFile): void
    {
        $caltxt = $this->io->read($sourceFile);
        $iCalData = $this->parser->parse($caltxt);
        $this->io->write($iCalData, $targetFile);
    }
}
