<?php

namespace Modules\Core\Patterns\Solid\SRP;

interface TranslatorInterface
{
    public function translate(string $text): string;
}
