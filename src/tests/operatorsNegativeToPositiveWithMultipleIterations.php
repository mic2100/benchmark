<?php

namespace mic2100\benchmark\tests;

class operatorsNegativeToPositiveWithMultipleIterations extends abstractTest
{
    public function __construct()
    {
        $this->setName('operators');
        $this->newBenchmarkObject();
    }

    public function execute()
    {
        $range = range(1, $this->iterations);

        $this->uBench->start();
        foreach ($range as $i) {
            $value = -100 *- 1;
        }
        $this->uBench->end();

        return $this;
    }
}
