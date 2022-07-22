<?php

namespace Modules\Core\Patterns\Solid\SRP;

interface TemplateEngineInterface
{
    public function render(string $template, array $params = []): string;
}
