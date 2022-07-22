<?php

namespace Modules\Core\Patterns\Flyweight;

abstract class Flyweight
{
    private FlyweightConstant $constant;

    /**
     * @return FlyweightConstant
     */
    public function getConst(): FlyweightConstant
    {
        return $this->constant;
    }


    /**
     * @param FlyweightConstant $constant
     */
    public function __construct(FlyweightConstant $constant)
    {
        $this->constant = $constant;
    }

}
