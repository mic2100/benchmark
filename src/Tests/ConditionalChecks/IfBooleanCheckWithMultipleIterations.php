<?php

namespace Mic2100\Benchmark\Tests\ConditionalChecks;

use Mic2100\Benchmark\Tests\AbstractTest;

class IfBooleanCheckWithMultipleIterations extends AbstractTest
{
    public const GROUP_NAME = 'ConditionalChecks';

    public function __construct()
    {
        $this->setName('if($this->array[$i])');
        $this->createTimer();
        $this->createRandomArray();
    }

    public function test($i)
    {
        if($this->array) {}
    }
}
