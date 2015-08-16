<?php

namespace Mic2100\Benchmark;

class StringGenerator
{
    /**
     * Get a random string
     *
     * @param int $length
     * @return string
     */
    public static function getRandomString($length = 30)
    {
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }
}
