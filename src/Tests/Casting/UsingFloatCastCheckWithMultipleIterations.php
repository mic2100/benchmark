<?php

namespace Mic2100\Benchmark\Tests\Casting;

use Mic2100\Benchmark\Tests\AbstractTest;

class UsingFloatCastCheckWithMultipleIterations extends AbstractTest
{
    public function __construct()
    {
        $this->setName('(float)');
        $this->newBenchmarkObject();
    }

    public function execute()
    {
        $range = range(1, $this->iterations);

        $this->timer->start();
        foreach ($range as $i) {
            $value = (float) $i;
        }
        $this->timer->stop();

        return $this;
    }
}