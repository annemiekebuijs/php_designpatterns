<?php

include_once "IProduct.php";

class Chair implements IProduct
{
    public function getProperties()
    {
        return "<br/>Product is: chair";

    }
}