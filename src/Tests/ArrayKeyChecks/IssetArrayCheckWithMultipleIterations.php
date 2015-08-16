<?php

namespace Mic2100\Benchmark\Tests\ArrayKeyChecks;

use Mic2100\Benchmark\Tests\AbstractTest;

class IssetArrayCheckWithMultipleIterations extends AbstractTest
{
    public function __construct()
    {
        $this->setName('isset');
        $this->createTimer();
        $this->createRandomArray();
    }

    /**
     * The arbitrary piece of code to execute
     */
    protected function test($i)
    {
        if(isset($this->array[10])) {}
    }
}
