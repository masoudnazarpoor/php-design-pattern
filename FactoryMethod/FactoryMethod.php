<?php

namespace Modules\Core\Patterns\FactoryMethod;


abstract class FactoryMethod
{
    abstract protected function createMethod(): MethodInterface;

    public function getMethod(MethodInterface $method): MethodInterface
    {
        return $this->createMethod();
    }
}
