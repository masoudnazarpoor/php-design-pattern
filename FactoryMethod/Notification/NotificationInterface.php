<?php

namespace Modules\Core\Patterns\FactoryMethod\Notification;

use Modules\Core\Patterns\FactoryMethod\MethodInterface;

interface NotificationInterface extends MethodInterface
{
    public function send();
}
