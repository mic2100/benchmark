<?php

namespace mic2100\benchmark\tests;

class ifBooleanCheckWithMultipleIterations extends abstractTest
{
    public function __construct()
    {
        $this->setName('if($i)');
        $this->newBenchmarkObject();
        $this->createRandomArray();
    }

    public function execute()
    {
        $range = range(1, $this->iterations);

        $this->uBench->start();
        foreach ($range as $i) {
            if($i) {

            }
        }
        $this->uBench->end();

        return $this;
    }
}