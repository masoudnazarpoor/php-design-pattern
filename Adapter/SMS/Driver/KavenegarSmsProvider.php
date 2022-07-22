<?php

namespace Modules\Core\Patterns\Adapter\SMS\Driver;

use Modules\Core\Patterns\Adapter\SMS\Contract\SmsProviderInterface;

class KavenegarSmsProvider implements SmsProviderInterface
{
    public function sendMessage(string $message, string $phone): void
    {
        dd('message sent ...');
    }
}
