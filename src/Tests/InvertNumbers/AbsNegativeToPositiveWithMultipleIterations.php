<?php

namespace Mic2100\Benchmark\Tests\InvertNumbers;

use Mic2100\Benchmark\Tests\AbstractTest;

class AbsNegativeToPositiveWithMultipleIterations extends AbstractTest
{
    public function __construct()
    {
        $this->setName('abs');
        $this->newBenchmarkObject();
    }

    public function execute()
    {
        $range = range(1, $this->iterations);

        $this->timer->start();
        foreach ($range as $i) {
            $value = abs(-100);
        }
        $this->timer->stop();

        return $this;
    }
}
