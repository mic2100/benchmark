<?php

namespace Mic2100\Benchmark\Tests\ArrayKeyChecks;

use Mic2100\Benchmark\Tests\AbstractTest;

class ArraykeyexistsArrayCheckWithMultipleIterations extends AbstractTest
{
    public function __construct()
    {
        $this->setName('array_key_exists');
        $this->createTimer();
        $this->createRandomArray();
    }

    /**
     * The arbitrary piece of code to execute
     */
    protected function test($i)
    {
        if(array_key_exists(10, $this->array)) {}
    }
}
