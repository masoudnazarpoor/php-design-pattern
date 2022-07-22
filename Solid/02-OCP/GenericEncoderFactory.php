<?php

namespace Modules\Core\Patterns\Solid\OCP;

use InvalidArgumentException;
use Modules\Core\Patterns\Solid\OCP\EncoderDriver\EncoderInterface;

class GenericEncoderFactory implements GenericEncoderFactoryInterface, GenericEncoderFactoryConfigInterface
{
    private $factories = [];

    public function addEncoder(string $format, callable $factory): void
    {
        $this->factories[$format] = $factory;
    }

    public function createEncoder(string $format): EncoderInterface
    {

        if (!isset($this->factories[$format])) {
            throw new InvalidArgumentException("invalid format");
        }

        return $this->factories[$format];
    }
}
