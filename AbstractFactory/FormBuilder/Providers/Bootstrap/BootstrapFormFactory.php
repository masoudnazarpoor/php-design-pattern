<?php

namespace Modules\Core\Patterns\AbstractFactory\FormBuilder\Providers\Bootstrap;

use Modules\Core\Patterns\AbstractFactory\FormBuilder\FormBuilderFactoryInterface;
use Modules\Core\Patterns\AbstractFactory\FormBuilder\Elements\ButtonInterface;
use Modules\Core\Patterns\AbstractFactory\FormBuilder\Elements\InputInterface;
use Modules\Core\Patterns\AbstractFactory\FormBuilder\Elements\TextAreaInterface;
use Modules\Core\Patterns\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\Button;
use Modules\Core\Patterns\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\Input;
use Modules\Core\Patterns\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\TextArea;

class BootstrapFormFactory implements FormBuilderFactoryInterface
{

    public function createButton(): ButtonInterface
    {
        return new Button;
    }
    public function createInput(): InputInterface
    {
        return new Input;
    }
    public function createTextArea(): TextAreaInterface
    {
        return new TextArea;
    }
}
