<?php

namespace Mic2100\Benchmark\Tests;

use Mic2100\Benchmark\ArrayGenerator;
use Mic2100\Benchmark\Timer;

abstract class AbstractTest implements TestInterface
{
    /**
     * The name of the test
     *
     * @var string
     */
    protected $name;

    /**
     * @var Timer
     */
    protected $timer;

    /**
     * @var array
     */
    protected $array;

    /**
     * The number of iteration that the test will complete
     *
     * @var int
     */
    protected $iterations = 500000;

    /**
     * @var float
     */
    protected $totalTime = 0;

    /**
     * Execute and run all the tests
     */
    public function execute()
    {
        $this->iterate();
    }

    /**
     * Returns a decorated string with details of the test
     *
     * @return array
     */
    public function output()
    {
        return [
            $this->getName(),
            $this->totalTime,
            $this->iterations
        ];
    }

    /**
     * The arbitrary piece of code to execute
     */
    abstract protected function test($i);

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = (string) $name;

        return $this;
    }

    /**
     * Iterate, run the test, and keep track of the time taken
     */
    protected function iterate()
    {
        $range = range(1, $this->iterations);
        foreach ($range as $i) {
            //$this->timer->start();
            $start = microtime(true);
            $this->test($i);
            //$this->timer->stop();
            $end = microtime(true);
            //$this->totalTime += $this->timer->getTime();
            $this->totalTime += ($end - $start);
        }
    }

    /**
     * Create a random array
     *
     * @param int $iterations
     * @param int $length
     * @return $this
     */
    protected function createRandomArray($iterations = 100, $length = 30)
    {
        $this->array = ArrayGenerator::createRandomArray($iterations, $length);

        return $this;
    }

    /**
     * Create a random associated array
     *
     * @param int $iterations
     * @param int $length
     * @return $this
     */
    protected function createRandomAssocArray($iterations = 100, $length = 30)
    {
        $this->array = ArrayGenerator::createRandomAssocArray($iterations, $length);

        return $this;
    }

    /**
     * Get a random string
     *
     * @param int $length
     * @return string
     */
    protected function getRandomString($length = 30)
    {
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }

    /**
     * Create a timer object
     *
     * @return $this
     */
    protected function createTimer()
    {
        $this->timer = new Timer;

        return $this;
    }
}
