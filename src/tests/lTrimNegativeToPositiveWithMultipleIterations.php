<?php

namespace mic2100\benchmark\tests;

class lTrimNegativeToPositiveWithMultipleIterations extends abstractTest
{
    public function __construct()
    {
        $this->setName('lTrim');
        $this->newBenchmarkObject();
    }

    public function execute()
    {
        $range = range(1, $this->iterations);

        $this->uBench->start();
        foreach ($range as $i) {
            $value = (int) ltrim((string) -100, '-');
        }
        $this->uBench->end();

        return $this;
    }
}
