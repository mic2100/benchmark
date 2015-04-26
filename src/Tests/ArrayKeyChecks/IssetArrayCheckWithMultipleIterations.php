<?php

namespace Mic2100\Benchmark\Tests\ArrayKeyChecks;

use Mic2100\Benchmark\Tests\AbstractTest;

class IssetArrayCheckWithMultipleIterations extends AbstractTest
{
    public function __construct()
    {
        $this->setName('isset');
        $this->newBenchmarkObject();
        $this->createRandomArray();
    }

    public function execute()
    {
        $range = range(1, $this->iterations);

        $this->uBench->start();
        foreach ($range as $i) {
            if(isset($this->array[10])) {

            }
        }
        $this->uBench->end();

        return $this;
    }
}