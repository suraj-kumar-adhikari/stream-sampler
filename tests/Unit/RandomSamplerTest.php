<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use org\bovigo\vfs\vfsStream;
use StreamSampler\RandomSampler;
use StreamSampler\InputIterator;

class RandomSamplerTest extends TestCase
{
    protected $randomSampler;

    public function setUp()
    {
        $streamContents = 'rKFwoLLy2P37rKrKFwoLLy2P37UxsEFwoLLy2P37UxrK';

        $file = vfsStream::newFile('test')
            ->withContent($streamContents)
            ->at(vfsStream::setup('root'));

        $this->randomSampler = new RandomSampler(new InputIterator($file->url()));
    }

    public function testGetRandomDataReturnsRandomDataWithCount()
    {
        $this->assertCount(5, $this->randomSampler->getRandomData(5));
        $this->assertCount(6, $this->randomSampler->getRandomData(6));
        $this->assertCount(7, $this->randomSampler->getRandomData(7));
    }

    public function testGetRandomDataReturnArray()
    {
        $this->assertInternalType('array', $this->randomSampler->getRandomData(7));
    }
}
