<?php

require "vendor/autoload.php";
require "FizzBuzz.php";

use PHPUnit\Framework\TestCase;


class FizzBuzzTest extends TestCase
{
    public function test_count_given1_shouldReturn1() {
        $fizzBuzz = new FizzBuzz();

        $actual = $fizzBuzz->count(1);

        $this->assertEquals("1", $actual);
    }
}
