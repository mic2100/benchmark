<?php

namespace Mic2100\Benchmark\Tests\ConditionalChecks;

use Mic2100\Benchmark\Tests\AbstractTest;

class IfBooleanCheckWithMultipleIterations extends AbstractTest
{
    public function __construct()
    {
        $this->setName('if($this->array[$i])');
        $this->newBenchmarkObject();
        $this->createRandomArray();
    }

    public function execute()
    {
        $range = range(1, $this->iterations);

        $this->timer->start();
        foreach ($range as $i) {
            if($this->array) {

            }
        }
        $this->timer->stop();

        return $this;
    }
}