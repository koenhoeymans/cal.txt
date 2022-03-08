<?php

namespace Caltxt;

interface IO
{
    /**
     * Reads the contents of a file.
     */
    public function read(string $file): string;

    /**
     * Writes the contents to a file
     */
    public function write(string $content, string $file): void;
}
