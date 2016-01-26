<?php

namespace Mic2100\Benchmark\Tests\Loops;

use Mic2100\Benchmark\Tests\AbstractTest;

class ForIntegerIteration extends AbstractTest
{
    public function __construct()
    {
        $this->setName('For Integer Iteration "for ($i = 0; $i < 10; $i++)"');
        $this->createTimer();
    }

    public function test($array)
    {
        for ($i = 0; $i < 10; $i++) {
        }
    }
}
