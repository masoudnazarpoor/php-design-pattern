<?php

namespace Modules\Core\Patterns\Solid\OCP\EncoderDriver;

class XmlEncoder implements EncoderInterface
{
    public function encode($data): string
    {
        return xmlrpc_encode($data);
    }
}
