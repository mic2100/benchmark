<?php

namespace Mic2100\Benchmark\Tests\NullStringCheck;

use Mic2100\Benchmark\Tests\AbstractTest;

class NullCoalesce extends AbstractTest
{
    public const GROUP_NAME = 'NullStringCheck';

    public function __construct()
    {
        $this->setName('Null String Check using Null Coalesce');
        $this->createTimer();
    }

    public function test($i)
    {
        $var = $i ?? '';
    }
}