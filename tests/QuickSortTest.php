<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Quicksort\QuickSort;

class QuickSortTest extends TestCase
{

    /** @test */
    public function theTruth(): void
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function testOutputIsAnArray(): void
    {
        $this->assertIsArray(QuickSort::sort([]));
    }

    /** @test */
    public function testOutputHasTheSameNumberOfValuesThanInput(): void
    {
        $unSortedValues = [9, 5, -1, 2];
        $this->assertCount(4, QuickSort::sort($unSortedValues));
    }

    /** @test */
    public function testOutputIsASortedArrayOfInputValues(): void
    {
        $unSortedValues = [3, 0, 2, 5, -1, 4, 1];
        $this->assertEquals([-1, 0, 1, 2, 3, 4, 5], QuickSort::sort($unSortedValues));
    }

}
