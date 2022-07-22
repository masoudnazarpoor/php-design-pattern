<?php

namespace Modules\Core\Patterns\Proxy\GoogleApi;

use Modules\Core\Patterns\Proxy\proxy;

class GoogleMapApiProxy extends proxy implements GoogleMapApiInterface
{


    public function finLocationByLatLng(string $lat, string $lng)
    {
        if (env('APP_ENV') == 'production') {
            return $this->proxyHandler->finLocationByLatLng($lat, $lng);
        }
        return null;
    }
}
