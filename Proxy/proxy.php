<?php

namespace Modules\Core\Patterns\Proxy;

abstract class proxy
{
    protected ProxyInterface $proxyHandler;

    /**
     * @param ProxyInterface $proxyHandler
     */
    public function __construct(ProxyInterface $proxyHandler)
    {
        $this->proxyHandler = $proxyHandler;
    }



}
