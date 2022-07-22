<?php

namespace Modules\Core\Patterns\Solid\SRP;

interface MailerInterface
{
    public function send(Message $message);
}
