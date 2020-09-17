<?php

namespace Models;

class Item
{

    private $name;
    private $description;
    private $price;
    private $quantity;



    function __construct()
    {
    }

    function setName($name)
    {
        $this->name = $name;
    }
    function setDescription($desc)
    {
        $this->description = $desc;
    }
    function setPrice($price)
    {
        $this->price = $price;
    }
    function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    function getName()
    {
        return $this->name;
    }
    function getDescription()
    {
        return $this->description;
    }
    function getPrice()
    {
        return $this->price;
    }
    function getQuantity()
    {
        return $this->quantity;
    }
    function total()
    {

        if (!empty($this->price) && !empty($this->quantity)) {
            $total = ($this->price*$this->quantity); 
            return $total;
        }
    }
}
