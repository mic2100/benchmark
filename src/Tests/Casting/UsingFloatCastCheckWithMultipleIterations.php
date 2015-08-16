<?php

namespace Mic2100\Benchmark\Tests\Casting;

use Mic2100\Benchmark\Tests\AbstractTest;

class UsingFloatCastCheckWithMultipleIterations extends AbstractTest
{
    public function __construct()
    {
        $this->setName('(float)');
        $this->createTimer();
    }

    public function test($i)
    {
        $value = (float) $i;
    }
}
