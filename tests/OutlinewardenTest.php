<?php
/**
 * Tests for OutlineWarden
 */

use PHPUnit\Framework\TestCase;
use Outlinewarden\Outlinewarden;

class OutlinewardenTest extends TestCase {
    private Outlinewarden $instance;

    protected function setUp(): void {
        $this->instance = new Outlinewarden(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Outlinewarden::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
