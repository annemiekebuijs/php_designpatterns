<?php

include "FurnitureFactory.php";
require_once 'Bookcase.php';
require_once 'Chair.php';
require_once 'Sofa.php';
require_once 'IkeaTable.php';


class Client
{
    private $factory;

	/**
	 * Client constructor.
	 */
	public function __construct()
    {
        $this->factory = new FurnitureFactory();
        echo $this->factory->startFactory(new Chair());
        echo $this->factory->startFactory(new IkeaTable());
        echo $this->factory->startFactory(new Bookcase());
        echo $this->factory->startFactory(new Sofa());
    }
}

$client = new Client();