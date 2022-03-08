<?php

namespace Caltxt;

class LocalFileIO implements IO
{
    public function read(string $file): string;
    {
        // @todo
        // deliberately omitting any form of checking or error handling
        // not necessary for intended use?
        return file_get_contents($file);
    }

    public function write(string $content, string $file): void;
    {
        // @todo
        // see same remark with `read`
        file_put_contents($file, $content);
    }
}
