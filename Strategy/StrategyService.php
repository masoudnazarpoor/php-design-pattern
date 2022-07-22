<?php

namespace Modules\Core\Patterns\Strategy;

abstract class StrategyService
{
    protected StrategyHandlerInterface $handler;

    /**
     * @param StrategyHandlerInterface $handler
     */
    public function __construct(StrategyHandlerInterface $handler)
    {
        $this->handler = $handler;
    }

    /**
     * @param StrategyHandlerInterface $handler
     * @return void
     */
    public function setMethod(StrategyHandlerInterface $handler): void
    {
        $this->handler = $handler;
    }


    // something method
}
