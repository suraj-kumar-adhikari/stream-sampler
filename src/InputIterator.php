<?php

namespace StreamSampler;

/**
 * InputIterator for input data
 *
 * @author Suraj Kumar Adhikari <surajprogrammer@live.com>
 */
class InputIterator implements \IteratorAggregate
{
    public function getIterator()
    {
        while ($line = fgets(STDIN)) {
            yield str_split($line);
        }
    }
}
