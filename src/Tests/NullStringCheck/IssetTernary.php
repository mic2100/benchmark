<?php

namespace Mic2100\Benchmark\Tests\NullStringCheck;

use Mic2100\Benchmark\Tests\AbstractTest;

class IssetTernary extends AbstractTest
{
    public const GROUP_NAME = 'NullStringCheck';

    public function __construct()
    {
        $this->setName('Null String Check using Ternary');
        $this->createTimer();
    }

    public function test($i)
    {
        $var = isset($i) ? $i : '';
    }
}