<?php

namespace StreamSampler;

/**
 * Generates secure random bytes
 *
 * @author Suraj Kumar Adhikari <surajprogrammer@live.com>
 */
class RandomGenerator
{
    /**
     * Generates a return random bytes
     *
     * @param int $length
     *
     * @return array
     */
    public static function getRandomBytes(int $length) : array
    {
        return str_split(base64_encode(random_bytes(4000)));
    }
}
