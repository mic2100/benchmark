<?php

namespace Mic2100\Benchmark;

class Timer
{
    /**
     * @var float
     */
    private $startTime;

    /**
     * @var float
     */
    private $endTime;

    /**
     * Start the timer
     */
    public function start()
    {
        $this->startTime = microtime(true);
    }

    /**
     * Stop the timer
     */
    public function stop()
    {
        $this->endTime = microtime(true);
    }

    /**
     * Returns the elapsed time
     *
     * @return float
     */
    public function getTime()
    {
        return $this->endTime - $this->startTime;
    }
}
