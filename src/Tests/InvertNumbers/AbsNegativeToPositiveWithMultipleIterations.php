<?php

namespace Mic2100\Benchmark\Tests\InvertNumbers;

use Mic2100\Benchmark\Tests\AbstractTest;

class AbsNegativeToPositiveWithMultipleIterations extends AbstractTest
{
    public const GROUP_NAME = 'InvertNumbers';

    public function __construct()
    {
        $this->setName('abs');
        $this->createTimer();
    }

    public function test($i)
    {
        $value = abs(-$i);
    }
}
