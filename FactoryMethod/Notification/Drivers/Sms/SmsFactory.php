<?php

namespace Modules\Core\Patterns\FactoryMethod\Notification\Drivers\Sms;

use App\Models\User;
use Modules\Core\Patterns\FactoryMethod\Notification\NotificationFactory;
use Modules\Core\Patterns\FactoryMethod\Notification\NotificationInterface;

class SmsFactory extends NotificationFactory
{
    public function sendMessage(int $ID, string $message)
    {
        dd($ID, $message);
    }

    public function sendMessages(array $messages)
    {
    }

    protected function createMethod(): NotificationInterface
    {
        return new class implements NotificationInterface{
            public function send()
            {
                // TODO: Implement send() method.
            }
        };
    }
}
