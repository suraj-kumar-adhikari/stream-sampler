<?php

namespace StreamSampler;

/**
 * Randomly generates data from a stream
 *
 * @author Suraj Kumar Adhikari <surajprogrammer@live.com>
 */
class RandomSampler
{
    protected $iterator;

    public function __construct(\Traversable $iterator)
    {
        $this->iterator = $iterator;
    }

    /**
     * Generates a return random data
     *
     * @param int $length
     *
     * @return array
     */
    public function getRandomData(int $length) : array
    {
        $data    = [];
        $counter = 0;

        foreach ($this->iterator as $items) {
            foreach ($items as $item) {
                if ($counter < $length) {
                    $data[$counter] = $item;
                } else {
                    $random = (int) mt_rand(0, $counter);

                    if ($random < $length) {
                        $data[$random] = $item;
                    }
                }
                $counter++;
            }
        }

        return $data;
    }
}
