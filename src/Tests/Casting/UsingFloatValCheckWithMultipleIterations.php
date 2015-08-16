<?php

namespace Mic2100\Benchmark\Tests\Casting;

use Mic2100\Benchmark\Tests\AbstractTest;

class UsingFloatValCheckWithMultipleIterations extends AbstractTest
{
    public function __construct()
    {
        $this->setName('floatval');
        $this->createTimer();
    }

    public function test($i)
    {
        $value = floatval($i);
    }
}
