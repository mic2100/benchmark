<?php

namespace Mic2100\Benchmark\Tests\InvertNumbers;

use Mic2100\Benchmark\Tests\AbstractTest;

class OperatorsNegativeToPositiveWithMultipleIterations extends AbstractTest
{
    public function __construct()
    {
        $this->setName('operators');
        $this->createTimer();
    }

    public function test($i)
    {
        $value = -$i *- 1;
    }
}
