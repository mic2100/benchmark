<?php

namespace mic2100\benchmark\tests;

class strReplaceNegativeToPositiveWithMultipleIterations extends abstractTest
{
    public function __construct()
    {
        $this->setName('str_replace');
        $this->newBenchmarkObject();
    }

    public function execute()
    {
        $range = range(1, $this->iterations);

        $this->uBench->start();
        foreach ($range as $i) {
            $value = (int) str_replace('-', '', (string) -100);
        }
        $this->uBench->end();

        return $this;
    }
}
    