<?php

namespace App\Services\Payment;

class Invoice
{

    public function __construct(
        protected string $title,
        protected int $price,
    ) {
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    
}
