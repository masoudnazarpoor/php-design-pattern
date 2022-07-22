<?php

namespace Modules\Core\Patterns\Solid\OCP\EncoderDriver;

interface EncoderInterface
{
    public function encode($data): string;
}
