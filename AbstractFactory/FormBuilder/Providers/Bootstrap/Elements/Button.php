<?php

namespace Modules\Core\Patterns\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements;

use Modules\Core\Patterns\AbstractFactory\FormBuilder\Elements\ButtonInterface;

class Button implements ButtonInterface
{
    public function render()
    {
        return '<button>bootstrap btn</button>';
    }
}
