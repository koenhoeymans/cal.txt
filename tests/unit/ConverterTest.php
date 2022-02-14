<?php

namespace Caltxt;

class ConverterTest extends \PHPUnit\Framework\TestCase
{
    private Converter $converter;

    public function setup(): void
    {
        $this->converter = new Converter();
    }

    /**
     * @test
     */
    public function it_does_test(): void
    {
        $this->assertTrue($this->converter->convert('a'));
    }
}

