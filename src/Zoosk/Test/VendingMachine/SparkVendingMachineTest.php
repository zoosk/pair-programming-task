<?php

namespace Zoosk\Test\VendingMachine;

use PHPUnit\Framework\TestCase;
use Zoosk\VendingMachine\SparkVendingMachine;

class SparkVendingMachineTest extends TestCase
{
    protected SparkVendingMachine $vendingMachine;

    protected function setUp(): void
    {
        $this->vendingMachine = new SparkVendingMachine();
    }

    public function testDispensesSelectedProduct()
    {
        $this->vendingMachine->addProducts(['sparkling-water', 'sparkling-water', 'spark-pasta', 'spark-soda']);
        $this->vendingMachine->selectProduct('sparkling-water');
        $this->vendingMachine->selectProduct('spark-pasta');
        $this->assertEquals(['sparkling-water', 'spark-pasta'], $this->vendingMachine->dispensedProducts());
    }
}
