<?php

namespace Mic2100\Benchmark\Tests\Casting;

use Mic2100\Benchmark\Tests\AbstractTest;

class UsingIntValCheckWithMultipleIterations extends AbstractTest
{
    public function __construct()
    {
        $this->setName('intval');
        $this->newBenchmarkObject();
    }

    public function execute()
    {
        $range = range(1, $this->iterations);

        $this->timer->start();
        foreach ($range as $i) {
            $value = intval($i);
        }
        $this->timer->stop();

        return $this;
    }
}