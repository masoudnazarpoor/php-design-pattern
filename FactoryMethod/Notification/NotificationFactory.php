<?php

namespace Modules\Core\Patterns\FactoryMethod\Notification;

use Modules\Core\Patterns\FactoryMethod\FactoryMethod;

abstract class NotificationFactory extends FactoryMethod
{
    abstract public function sendMessage(int $ID, string $message);
    abstract public function sendMessages(array $messages);
}
