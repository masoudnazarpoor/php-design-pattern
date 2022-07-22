<?php

namespace Modules\Core\Patterns\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements;

use Modules\Core\Patterns\AbstractFactory\FormBuilder\Elements\TextAreaInterface;

class TextArea implements TextAreaInterface
{
    public function render()
    {
        return '<textarea name="" id="" cols="30" rows="10"></textarea>';
    }
}
