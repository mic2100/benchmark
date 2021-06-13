<?php

namespace Mic2100\Benchmark\Tests\InvertNumbers;

use Mic2100\Benchmark\Tests\AbstractTest;

class StrReplaceNegativeToPositiveWithMultipleIterations extends AbstractTest
{
    public const GROUP_NAME = 'InvertNumbers';

    public function __construct()
    {
        $this->setName('str_replace');
        $this->createTimer();
    }

    public function test($i)
    {
        $value = (int) str_replace('-', '', (string) -$i);
    }
}
