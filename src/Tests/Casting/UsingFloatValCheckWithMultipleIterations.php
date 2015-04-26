<?php

namespace Mic2100\Benchmark\Tests\Casting;

use Mic2100\Benchmark\Tests\AbstractTest;

class UsingFloatValCheckWithMultipleIterations extends AbstractTest
{
    public function __construct()
    {
        $this->setName('floatval');
        $this->newBenchmarkObject();
    }

    public function execute()
    {
        $range = range(1, $this->iterations);

        $this->uBench->start();
        foreach ($range as $i) {
            $value = floatval($i);
        }
        $this->uBench->end();

        return $this;
    }
}