<?php

abstract class IkeaFurnitureFactory
{
	protected abstract function factoryMethod(IProduct $product);

	public function startFactory($product)
	{
		$mfg = $this->factoryMethod($product);

		return $mfg;
	}
}