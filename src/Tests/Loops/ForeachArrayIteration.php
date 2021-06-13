<?php

namespace Mic2100\Benchmark\Tests\Loops;

use Mic2100\Benchmark\Tests\AbstractTest;

class ForeachArrayIteration extends AbstractTest
{
    public const GROUP_NAME = 'Loops';

    public function __construct()
    {
        $this->setName('Foreach Array Iteration "foreach ($array as $key => $value)"');
        $this->createTimer();
    }

    public function test($array)
    {
        foreach ($array as $key => $value) {
        }
    }

    protected function iterate()
    {
        $array = array(
            'Test',
            'Test',
            'Test',
            'Test',
            'Test',
            'Test',
            'Test',
            'Test',
            'Test',
            'Test',
            'Test',
        );
        $range = range(1, $this->iterations);
        foreach ($range as $i) {

            $start = microtime(true);
            $this->test($array);
            $end = microtime(true);

            $this->totalTime += ($end - $start);
        }
    }
}
