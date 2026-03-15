<?php
/**
 * Tests for FakerJsData
 */

use PHPUnit\Framework\TestCase;
use Fakerjsdata\Fakerjsdata;

class FakerjsdataTest extends TestCase {
    private Fakerjsdata $instance;

    protected function setUp(): void {
        $this->instance = new Fakerjsdata(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Fakerjsdata::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
