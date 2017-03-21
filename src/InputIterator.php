<?php

namespace StreamSampler;

/**
 * InputIterator for input data
 *
 * @author Suraj Kumar Adhikari <surajprogrammer@live.com>
 */
class InputIterator implements \IteratorAggregate
{
    protected $stream;

    public function __construct($stream)
    {
        $this->stream = $stream;
    }

    public function getIterator()
    {
        $stream = fopen($this->stream, 'r');

        while ($line = fgets($stream)) {
            yield str_split($line);
        }
    }
}
