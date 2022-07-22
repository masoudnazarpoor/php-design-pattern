<?php

namespace Modules\Core\Patterns\Adapter\SMS\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void sendMessage(string $message, string $phone)
 */

class SmsProvider extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SmsProviderFacade';
    }
}
