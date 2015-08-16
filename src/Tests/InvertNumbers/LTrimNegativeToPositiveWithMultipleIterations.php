<?php

namespace Mic2100\Benchmark\Tests\InvertNumbers;

use Mic2100\Benchmark\Tests\AbstractTest;

class LTrimNegativeToPositiveWithMultipleIterations extends AbstractTest
{
    public function __construct()
    {
        $this->setName('lTrim');
        $this->createTimer();
    }

    public function test($i)
    {
        $value = (int) ltrim((string) -$i, '-');
    }
}
