<?php

class Laptop
{

    public $brand;
    function __construct($brand)
    {
        $this->brand = $brand;
    }

    function calculateDiscount()
    {
        if ($this->brand === 'dell') {
            return $this->price() * .5;
        } else if ($this->brand === 'hp') {
            return $this->price() * .7;
        } else if ($this->brand === 'mac') {
            return $this->price() * .1;
        }
    }

    function price()
    {
        return 500;
    }
}


// $laptop = new Laptop('hp');

// echo ($laptop->calculateDiscount());

interface Discount
{
    public function calculateDiscount();
}

class Hp implements Discount
{
    public function calculateDiscount()
    {
        return $this->price() * .5;
    }
    function price()
    {
        return 3000;
    }
}

class Dell implements Discount
{
    public function calculateDiscount()
    {
        return $this->price() * .7;
    }
    function price()
    {
        return 5000;
    }
}

class Mac implements Discount
{
    public function calculateDiscount()
    {
        return $this->price() * .1;
    }
    function price()
    {
        return 1500;
    }
}


class CalculateDiscount
{
    public $discount;
    function __construct(Discount $discount)
    {
        $this->discount = $discount;
    }

    public function show()
    {
        return $this->discount->calculateDiscount();
    }
}

echo (new CalculateDiscount(new Hp))->show();
