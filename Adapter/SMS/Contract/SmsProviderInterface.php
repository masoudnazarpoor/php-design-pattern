<?php

namespace Modules\Core\Patterns\Adapter\SMS\Contract;

use Modules\Core\Patterns\Adapter\AdabterInterface;

interface SmsProviderInterface extends AdabterInterface
{
    public function sendMessage(string $message, string $phone): void;
}
