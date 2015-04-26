<?php

namespace Mic2100\Benchmark;

use Mic2100\Benchmark\Tests\TestInterface;

class Benchmarker
{
    /**
     * Tests that have been added
     *
     * @var array
     */
    protected $tests = [];

    /**
     * Add a test to the benchmark
     *
     * @param TestInterface $test
     * @return $this
     */
    public function add(TestInterface $test)
    {
        $this->tests[] = $test;

        return $this;
    }

    /**
     * Resets the tests var
     *
     * @return $this
     */
    public function reset()
    {
        $this->tests = [];

        return $this;
    }

    /**
     * Executes the tests that have been added
     *
     * @return $this
     */
    public function execute()
    {
        foreach ($this->tests as &$test) {
            $test->execute();
        }
        unset($test);

        return $this;
    }

    /**
     * Report on the tests that have been executed
     *
     * @param string $title
     * @return $this
     */
    public function report($title)
    {
        echo $title . PHP_EOL;
        echo '============================================================================';
        foreach ($this->tests as $test) {
            echo $test->output();
            echo '============================================================================';
        }

        echo PHP_EOL;

        return $this;
    }
}