<?php

namespace App\Patterns\Chain;


abstract class Handler
{
    protected bool $isPassed = false;
    protected array $additional = [];

    public function getkey(): string
    {
        return $this->handler_key;
    }

    public function setPassed(bool $isPassed): self
    {
        $this->isPassed = $isPassed;
        return $this;
    }

    public function getPassed(): bool
    {
        return $this->isPassed;
    }

    public function setAdditional(array $additional): self
    {
        $this->additional = $additional;
        return $this;
    }

    public function getAdditional(): array
    {
        return array_merge(['key' => $this->handler_key], $this->additional);
    }

    abstract public function work(): self;
}
