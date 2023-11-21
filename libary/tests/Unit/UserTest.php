<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $name = "John";
        $this->assertTrue($name == "Jack");
    }
    public function test_exampleTrue(): void
    {
        $name = "John";
        $this->assertTrue($name == "John");
    }
}
