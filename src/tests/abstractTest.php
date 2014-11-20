<?php

namespace mic2100\benchmark\tests;

use Ubench;

abstract class abstractTest implements testInterface
{
    protected $name;

    protected $uBench;

    protected $array;

    protected $iterations = 10000000;

    public function output()
    {
        return sprintf(
            "\n%.8fs to complete %d times calling %s\n",
            number_format($this->uBench->getTime(true), 8),
            $this->iterations,
            $this->getName()
        );
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = (string) $name;

        return $this;
    }

    protected function createRandomArray($iterations = 100, $length = 30)
    {
        $this->array = [];
        for($i = 0; $i < $iterations; $i++) {
            $this->array[] = $this->getRandomString($length);
        }

        return $this;
    }

    protected function createRandomAssocArray($iterations = 100, $length = 30)
    {
        $this->array = [];
        $key = 'aaa';
        for($i = 0; $i < $iterations; $i++) {
            $this->array[$key++] = $this->getRandomString($length);
        }

        return $this;
    }

    protected function getRandomString($length = 30)
    {
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }

    protected function newBenchmarkObject()
    {
        $this->uBench = new Ubench;

        return $this;
    }
}