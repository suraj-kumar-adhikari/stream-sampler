<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use org\bovigo\vfs\vfsStream;
use StreamSampler\InputIterator;

class InputIteratorTest extends TestCase
{
    public function testIteratorStoresInputStream()
    {
        $streamContents = 'rKFwoLLy2P37rKrKFwoLLy2P37UxsEFwoLLy2P37UxrK';

        $file = vfsStream::newFile('test')
            ->withContent($streamContents)
            ->at(vfsStream::setup('root'));

        $iterator = new InputIterator($file->url());

        foreach ($iterator as $items) {
            foreach ($items as $item) {
                $data[] = $item;
            }
        }

        $this->assertEquals(str_split($streamContents), $data);
    }
}
