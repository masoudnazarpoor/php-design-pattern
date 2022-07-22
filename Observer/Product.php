<?php

namespace App\Services\Observer;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class Product implements SplSubject
{
    protected int $price;
    protected SplObjectStorage $observers;

    public function __construct(int $price)
    {
        $this->price = $price;
        $this->observers = new SplObjectStorage;
    }
    
    public function changePrice(int $price)
    {
        $this->price = $price;
        $this->notify();
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
    
    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }
    
    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }
}
