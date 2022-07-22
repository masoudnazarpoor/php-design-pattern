<?php

namespace Modules\Core\Patterns\Solid\OCP;

use Modules\Core\Patterns\Solid\OCP\EncoderDriver\EncoderInterface;

interface GenericEncoderFactoryInterface
{
    public function createEncoder(string $format): EncoderInterface;
}
