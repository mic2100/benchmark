<?php

namespace Mic2100\Benchmark\Tests\Casting;

use Mic2100\Benchmark\Tests\AbstractTest;

class UsingFloatValCheckWithMultipleIterations extends AbstractTest
{
    public const GROUP_NAME = 'Casting';

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
