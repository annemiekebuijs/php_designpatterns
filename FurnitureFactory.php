<?php

include_once "IkeaFurnitureFactory.php";

class FurnitureFactory extends IkeaFurnitureFactory
{
    private $product;

    protected function factoryMethod(IProduct $product)
    {
        $this->product = $product;

        return $this->product->getProperties();
    }
}