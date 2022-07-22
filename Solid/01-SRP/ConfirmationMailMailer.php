<?php

namespace Modules\Core\Patterns\Solid\SRP;

class ConfirmationMailMailer
{
    private $confirmationMailFactory;
    private $mailer;

    public function __construct(MailerInterface $mailer,ConfirmationMailFactory $confirmationMailFactory)
    {
        $this->mailer = $mailer;
        $this->confirmationMailFactory = $confirmationMailFactory;
    }


    public function sendTo(User $user)
    {
        $message = $this->createMessageFor($user);
        $this->sendMessage($message);
    }

    private function sendMessage(Message $message)
    {
        return $this->mailer->send($message);
    }

    private function createMessageFor(User $user)
    {
        return $this->confirmationMailFactory->createMessageFor($user);
    }
}
