<?php

namespace Caltxt;

interface Parser
{
    public function parse(string $caltxt): string;
}
