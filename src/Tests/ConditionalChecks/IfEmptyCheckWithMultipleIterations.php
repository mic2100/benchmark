<?php

namespace Mic2100\Benchmark\Tests\ConditionalChecks;

use Mic2100\Benchmark\Tests\AbstractTest;

class IfEmptyCheckWithMultipleIterations extends AbstractTest
{
    public const GROUP_NAME = 'ConditionalChecks';

    public function __construct()
    {
        $this->setName('if(!empty($this->array))');
        $this->createTimer();
        $this->createRandomArray();
    }

    protected function test($i)
    {
        if(!empty($this->array)) {}
    }
}
