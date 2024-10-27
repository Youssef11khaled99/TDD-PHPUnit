<?php

use App\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    /** @test  */
    function test_empty_string()
    {
        $calculator = new StringCalculator();

        $this->assertEquals(0, $calculator->add(""));
    }

    /** @test  */
    function test_single_number_string_one()
    {
        $calculator = new StringCalculator();

        $this->assertEquals(1, $calculator->add("1"));
    }

    /** @test  */
    function test_single_number_string_two()
    {
        $calculator = new StringCalculator();

        $this->assertEquals(2, $calculator->add("2"));
    }

    /** @test  */
    function test_single_number_string_fifteen()
    {
        $calculator = new StringCalculator();

        $this->assertEquals(15, $calculator->add("15"));
    }

    /** @test  */
    function test_adding_two_numbers_1_2()
    {
        $calculator = new StringCalculator();

        $this->assertEquals(3, $calculator->add("1,2"));
    }

    /** @test  */
    function test_adding_two_numbers_99_123()
    {
        $calculator = new StringCalculator();

        $this->assertEquals(222, $calculator->add("99;123", ";"));
    }

    /** @test  */
    function test_adding_three_numbers()
    {
        $calculator = new StringCalculator();

        $this->assertEquals(235, $calculator->add("99;123;12;1", ";"));
    }

    /** @test  */
    function test_adding_three_numbers_with_new_line()
    {
        $calculator = new StringCalculator();

        $this->assertEquals(235, $calculator->add("99\n123\n12;1", ";"));
    }

    /** @test  */
    function test_adding_three_numbers_with_number_bigger_than_1000()
    {
        $calculator = new StringCalculator();

        $this->assertEquals(112, $calculator->add("99\n1001\n12;1", ";"));
    }
}
