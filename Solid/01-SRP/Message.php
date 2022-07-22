<?php

namespace Modules\Core\Patterns\Solid\SRP;

class Message
{

    private $subject;
    private $body;
    private $emailAddress;

    public function __construct($subject, $body, $emailAddress)
    {
        $this->subject = $subject;
        $this->body = $body;
        $this->emailAddress = $emailAddress;
    }

    public function getSubject() :string
    {
        return $this->subject;
    }

    public function getBody():string
    {
        return $this->body;
    }

    public function getEmailAddress():string
    {
        return $this->emailAddress;
    }
}
