<?php

namespace Zoosk\VendingMachine;

class SparkVendingMachine
{
    /**
     * Lets the user select a product
     *
     * @param string $sku Identifier of product type
     * @return void
     */
    public function selectProduct(string $sku): void
    {
        // TODO implement method
    }

    /**
     * Return all products currently in the dispenser
     *
     * @return string[] List of products represented by their SKUs
     */
    public function dispensedProducts(): array
    {
        // TODO implement method
        return [];
    }

    /**
     * Adds a given list of products to the inventory
     *
     * @param string[] $skus List of products represented by their SKUs
     * @return void
     */
    public function addProducts(array $skus): void
    {
        // TODO implement method
    }
}
