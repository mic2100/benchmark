<?php

namespace mic2100\benchmark;

use mic2100\benchmark\tests\testInterface;

class benchmarker
{
    protected $tests = [];

    public function add(testInterface $test)
    {
        $this->tests[] = $test;

        return $this;
    }

    public function execute()
    {
        foreach ($this->tests as &$test) {
            $test->execute();
        }
        unset($test);

        return $this;
    }

    public function report()
    {
        foreach ($this->tests as $test) {
            echo $test->output();
            echo PHP_EOL;
        }

        return $this;
    }
}