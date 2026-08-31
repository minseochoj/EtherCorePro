<?php
/**
 * Tests for EtherCorePro
 */

use PHPUnit\Framework\TestCase;
use Ethercorepro\Ethercorepro;

class EthercoreproTest extends TestCase {
    private Ethercorepro $instance;

    protected function setUp(): void {
        $this->instance = new Ethercorepro(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Ethercorepro::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
