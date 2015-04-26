<?php

namespace Mic2100\Benchmark\Tests\ConditionalChecks;

use Mic2100\Benchmark\Tests\AbstractTest;

class IfIsNullCheckWithMultipleIterations extends AbstractTest
{
    public function __construct()
    {
        $this->setName('if(!is_null($i))');
        $this->newBenchmarkObject();
        $this->createRandomArray();
    }

    public function execute()
    {
        $range = range(1, $this->iterations);

        $this->uBench->start();
        foreach ($range as $i) {
            if(!is_null($i)) {

            }
        }
        $this->uBench->end();

        return $this;
    }
}