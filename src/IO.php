<?php

namespace Caltxt;

interface IO
{
    public function read(): string;

    public function write(): void;
}
