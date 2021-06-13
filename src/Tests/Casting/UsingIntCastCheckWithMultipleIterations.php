<?php

namespace Mic2100\Benchmark\Tests\Casting;

use Mic2100\Benchmark\Tests\AbstractTest;

class UsingIntCastCheckWithMultipleIterations extends AbstractTest
{
    public const GROUP_NAME = 'Casting';

    public function __construct()
    {
        $this->setName('(int)');
        $this->createTimer();
    }

    public function test($i)
    {
        $value = (int) $i;
    }
}
