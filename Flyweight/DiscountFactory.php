<?php

namespace Modules\Core\Patterns\Flyweight;

use Carbon\Carbon;

abstract class DiscountFactory
{
    private array $constants = [];

    /**
     * @return Flyweight
     */
    abstract public function create(): Flyweight;

    abstract private function createConstant(...$vars): FlyweightConstant;
    //    {
    //        $key = $this->createKey($vars);
    //
    //        if (!isset($this->constants[$key])) {
    //            $this->constants[$key] = new FlyweightConstant(...$vars);
    //        }
    //        return $this->constants[$key];
    //    }

    private function createKey(...$vars): string
    {
        return varHasher(...$vars);
    }
}
