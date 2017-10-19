<?php

include_once "IProduct.php";

class Sofa implements IProduct
{
    public function getProperties()
    {
        return "<br/>This is a sofa";
    }
}