<?php

namespace mic2100\benchmark\tests;

class issetArrayCheckWithMultipleIterations extends abstractTest
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