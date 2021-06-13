<?php

namespace Mic2100\Benchmark\Tests\Casting;

use Mic2100\Benchmark\Tests\AbstractTest;

class UsingIntValCheckWithMultipleIterations extends AbstractTest
{
    public const GROUP_NAME = 'Casting';

    public function __construct()
    {
        $this->setName('intval');
        $this->createTimer();
    }

    public function test($i)
    {
        $value = intval($i);
    }
}
