<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use StreamSampler\RandomGenerator;

class RandomGeneratorTest extends TestCase
{
    public function testGetRandomBytesReturnsArray()
    {
        //Since base64 encode will be huge I can't check for length instead checking for return type
        $this->assertInternalType('array', RandomGenerator::getRandomBytes(1000));
    }
}
