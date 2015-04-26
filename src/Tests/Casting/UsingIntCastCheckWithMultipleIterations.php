<?php

namespace Mic2100\Benchmark\Tests\Casting;

use Mic2100\Benchmark\Tests\AbstractTest;

class UsingIntCastCheckWithMultipleIterations extends AbstractTest
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