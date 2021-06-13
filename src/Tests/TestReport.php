<?php

namespace Mic2100\Benchmark\Tests;

class TestReport
{
    private array $body = [];

    public function __construct(
        private string $groupName,
    ) {

    }

    /**
     * @param string $name
     * @param int $iterations
     * @param float $totalTime
     */
    public function addTestReport(string $name, float $totalTime, int $iterations): void
    {
        $this->body[] = [
            $this->groupName,
            $name,
            number_format($totalTime, 8),
            number_format($totalTime / $iterations, 8),
            $iterations
        ];
    }

    /**
     * @return string[]
     */
    public function getHeaders(): array
    {
        return [
            'Group',
            'Test Name',
            'Total Time (s)',
            'Average Time (s)',
            'Iterations',
        ];
    }

    /**
     * @return array
     */
    public function getBody(): array
    {
        return $this->body;
    }
}