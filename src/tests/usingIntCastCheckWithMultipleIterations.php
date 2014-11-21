<?php

namespace mic2100\benchmark\tests;

class usingIntCastCheckWithMultipleIterations extends abstractTest
{
    public function __construct()
    {
        $this->setName('(int)');
        $this->newBenchmarkObject();
    }

    public function execute()
    {
        $range = range(1, $this->iterations);

        $this->uBench->start();
        foreach ($range as $i) {
            $value = (int) $i;
        }
        $this->uBench->end();

        return $this;
    }
}