<?php

namespace mic2100\benchmark\tests;

class usingIntValCheckWithMultipleIterations extends abstractTest
{
    public function __construct()
    {
        $this->setName('intval');
        $this->newBenchmarkObject();
    }

    public function execute()
    {
        $range = range(1, $this->iterations);

        $this->uBench->start();
        foreach ($range as $i) {
            $value = intval($i);
        }
        $this->uBench->end();

        return $this;
    }
}