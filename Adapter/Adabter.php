<?php

namespace Modules\Core\Patterns\Adapter;

abstract class Adabter
{
    protected $driver;

    public function __construct(AdabterInterface $adabter)
    {
        $this->driver = $adabter;
    }

    public function __call($name, $arguments)
    {
        return  $this->driver->{$name}(...$arguments);
    }
}
