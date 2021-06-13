<?php

namespace Mic2100\Benchmark\Tests\ConditionalChecks;

use Mic2100\Benchmark\Tests\AbstractTest;

class IfIsNullCheckWithMultipleIterations extends AbstractTest
{
    public const GROUP_NAME = 'ConditionalChecks';

    public function __construct()
    {
        $this->setName('if(!is_null($this->array))');
        $this->createTimer();
        $this->createRandomArray();
    }

    public function test($i)
    {
        if(!is_null($this->array)) {}
    }
}
