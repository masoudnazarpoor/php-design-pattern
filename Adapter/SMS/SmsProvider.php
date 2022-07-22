<?php

namespace Modules\Core\Patterns\Adapter\SMS;

use Modules\Core\Patterns\Adapter\Adabter;
use Modules\Core\Patterns\Adapter\SMS\Contract\SmsProviderInterface;

class SmsProvider extends Adabter
{
    public function __construct(SmsProviderInterface $provider)
    {
        parent::__construct($provider);
    }
}
