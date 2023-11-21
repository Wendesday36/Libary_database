<?php

namespace Tests\Unit;

use App\Room;
use PHPUnit\Framework\TestCase;

class RoomTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }
    public function testHas(): void
    {
        $room = new Room(["Bonnie", "Clyde"]);
        $this->assertTrue($room->has("Bonnie"));
    }
    /* public function testHasnt(): void
    {
        $room = new Room(["HawkEye", "Clyde"]);
        $this->assertTrue($room->has("Bonnie"));
    } */
    public function testRoomAdd()
    {
        $room = new Room(["Jack"]); // Create a new room
        $this->assertContains("Peter", $room->add("Peter"));
    }
 public function testRoomRemove()
    {
        $room = new Room(["Bonnie", "Clyde"]);
        $this->assertCount(1, $room->remove("Bonnie"));
    } 
}
