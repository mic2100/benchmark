<?php

namespace Mic2100\Benchmark\Tests\Validation;

use Mic2100\Benchmark\Tests\AbstractTest;

class FilterVarValidateInt extends AbstractTest
{
    public const GROUP_NAME = 'Validation';

    public function __construct()
    {
        $this->setName('Filter Var Validate Int"');
        $this->createTimer();
    }

    public function test($i)
    {
        filter_var($i, FILTER_VALIDATE_INT);
    }
}
