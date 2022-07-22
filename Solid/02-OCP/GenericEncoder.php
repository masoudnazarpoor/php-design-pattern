<?php

namespace Modules\Core\Patterns\Solid\OCP;

class GenericEncoder
{
    private $encoderFactory;

    public function __construct(GenericEncoderFactoryInterface $encoderFacory)
    {
        $this->encoderFacory = $encoderFacory;
    }

    public function encode($data, string $format): string
    {
        $encoder = $this->encoderFactory->createEncoder($format);
        return $encoder->encode($data);
    }
}
