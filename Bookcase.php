<?php

include_once "IProduct.php";

class Bookcase implements IProduct
{
    public function getProperties()
    {
        return "<br/>This is a bookcase";
    }
}