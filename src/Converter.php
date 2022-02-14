<?php

namespace Caltxt;

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
