<?php

namespace Modules\Core\Patterns\Solid\SRP;

class ConfirmationMailFactory
{
    private $templateEngine;
    private $translator;

    public function __construct(
        TemplateEngineInterface $templateEngine,
        TranslatorInterface $translator,
    ) {
        $this->templateEngine = $templateEngine;
        $this->translator = $translator;
    }

    public function createMessageFor(User $user): Message
    {
        $email =  $user->getEmail();
        $subject =  $this->translator->translate('please confirm youe email address');
        $body = $this->templateEngine->render(
            'emails.confirmation',
            [
                'body' => $this->translator->translate('please confirm youe email address')
            ]
        );

        return new Message($subject, $body, $email);
    }
}
