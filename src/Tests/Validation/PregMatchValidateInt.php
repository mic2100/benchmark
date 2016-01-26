<?php

namespace Mic2100\Benchmark\Tests\Validation;

use Mic2100\Benchmark\Tests\AbstractTest;

class PregMatchValidateInt extends AbstractTest
{
    public function __construct()
    {
        $this->setName('Preg Match Validate Int"');
        $this->createTimer();
    }

    public function test($i)
    {
        preg_match('/$\d+^/', $i);
    }
}
