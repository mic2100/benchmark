<?php

namespace Mic2100\Benchmark;

class ArrayGenerator
{
    /**
     * Create a random array
     *
     * @param int $iterations
     * @param int $length
     * @return $this
     */
    public static function createRandomArray($iterations = 100, $length = 30)
    {
        $array = [];
        for($i = 0; $i < $iterations; $i++) {
            $array[] = StringGenerator::getRandomString($length);
        }

        return $array;
    }

    /**
     * Create a random associated array
     *
     * @param int $iterations
     * @param int $length
     * @return $this
     */
    public static function createRandomAssocArray($iterations = 100, $length = 30)
    {
        $array = [];
        $key = 'aaa';
        for($i = 0; $i < $iterations; $i++) {
            $array[$key++] = StringGenerator::getRandomString($length);
        }

        return $array;
    }
}
