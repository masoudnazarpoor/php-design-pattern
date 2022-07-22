<?php

namespace Modules\Core\Patterns\Proxy\GoogleApi;

use Modules\Core\Patterns\Proxy\proxyInterface;

interface GoogleMapApiInterface extends proxyInterface
{
    public function findLocationByLatLng(string $lat, string $lng);
}
