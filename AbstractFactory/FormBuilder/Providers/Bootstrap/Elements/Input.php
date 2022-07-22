<?php

namespace Modules\Core\Patterns\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements;

use Modules\Core\Patterns\AbstractFactory\FormBuilder\Elements\InputInterface;

class Input implements InputInterface
{
    public function render()
    {
        return '<input type="text">';
    }
}
