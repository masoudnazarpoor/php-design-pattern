<?php

namespace Modules\Core\Patterns\AbstractFactory\FormBuilder;

use Modules\Core\Patterns\AbstractFactory\FormBuilder\Elements\ButtonInterface;
use Modules\Core\Patterns\AbstractFactory\FormBuilder\Elements\InputInterface;
use Modules\Core\Patterns\AbstractFactory\FormBuilder\Elements\TextAreaInterface;

interface FormBuilderFactoryInterface
{
    public function createButton(): ButtonInterface;
    public function createInput(): InputInterface;
    public function createTextArea(): TextAreaInterface;
}
