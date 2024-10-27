<?php

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;


class FizzBuzzTest extends TestCase
{

    /** @test */
    function test_fizz_buzz() {
        $testData = [1,2,3,4,5,15];
        $fizzBuzz = new FizzBuzz;

        $this->assertEquals("1-2-Fizz-4-Buzz-FizzBuzz", $fizzBuzz->generate($testData));
    }
}