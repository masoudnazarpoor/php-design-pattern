<?php

namespace Modules\Core\Patterns\Solid\OCP\EncoderDriver;

class JsonEncoder implements EncoderInterface
{
    public function encode($data): string
    {
        return json_encode($data);
    }
}
