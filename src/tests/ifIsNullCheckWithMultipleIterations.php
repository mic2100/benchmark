<?php

namespace mic2100\benchmark\tests;

class ifIsNullCheckWithMultipleIterations extends abstractTest
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