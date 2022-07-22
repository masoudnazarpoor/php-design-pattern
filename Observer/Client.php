<?php

namespace App\Services\Observer;

use App\Services\Observer\Observers\ProductOfferObserver;

class Client
{

    public function __construct()
    {
        
        $product = new Product(450000);
        $product->attach(new ProductOfferObserver);


    }
}
