<?php

namespace Caltxt;

class ConversionTest extends \PHPUnit\Framework\TestCase
{
    private string $inputFile;

    private string $outputFile;

    public function setup(): void
    {
        $this->inputFile = __DIR__ . DIRECTORY_SEPARATOR . 'sample_calendar.txt';
        $this->outputFile = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'sample_calendar.ics';
        if(file_exists($this->outputFile)) {
            unlink($this->outputFile);
        }
    }

    public function teardown(): void
    {
        if(file_exists($this->outputFile)) {
            unlink($this->outputFile);
        }
    }

    /**
     * @test
     */
    public function it_converts_caltxt_to_ics_file(): void
    {
        $expected_content = file_get_contents($this->outputFile);
        $actual_content = $this->converter->convert($this->inputFile);

        $this->assertTrue($expected_content, $actual_content);
    }
}

