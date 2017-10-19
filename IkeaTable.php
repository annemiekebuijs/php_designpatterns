<?php

include_once "IProduct.php";

class IkeaTable implements IProduct
{
    public function getProperties()
    {
        return "<br/>This is a table";
    }
}