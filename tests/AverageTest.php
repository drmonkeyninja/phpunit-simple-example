<?php

use drmonkeyninja\Average;
use PHPUnit\Framework\TestCase;

class AverageTest extends TestCase
{
    protected $Average;

    public function setUp()
    {
        $this->Average = new Average();
    }

    public function testCalculationOfMean()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->Average->mean($numbers));
    }

    public function testCalculationOfMedianForOddNumberOfValues()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->Average->median($numbers));
    }

    public function testCalculationOfMedianForEvenNumberOfValues()
    {
        $numbers = [3, 7, 6, 5];
        $this->assertEquals(5.5, $this->Average->median($numbers));
    }

    public function testCalculationOfMode()
    {
        $numbers = [1, 3, 3, 3, 4, 4, 6, 6, 9];
        $this->assertEquals(3, $this->Average->mode($numbers));
    }
}
