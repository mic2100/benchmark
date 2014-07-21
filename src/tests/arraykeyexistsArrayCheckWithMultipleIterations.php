<?php

namespace mic2100\benchmark\tests;

class arraykeyexistsArrayCheckWithMultipleIterations extends abstractTest
{
    public function __construct()
    {
        $this->setName('array_key_exists');
        $this->newBenchmarkObject();
        $this->createRandomArray();
    }

    public function execute()
    {
        $range = range(1, $this->iterations);

        $this->uBench->start();
        foreach ($range as $i) {
            if(array_key_exists(10, $this->array)) {

            }
        }
        $this->uBench->end();

        return $this;
    }
}