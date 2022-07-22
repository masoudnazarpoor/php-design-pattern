<?php

namespace App\Services\Payment\Handler\Online;

use App\Services\Payment\Invoice;
use App\Services\Payment\PaymentHandler;

class Saman implements PaymentHandler
{
    public function pay(Invoice $invoice)
    {
        return <<<FORM_REDIRECT
            <img src="" />
        FORM_REDIRECT;
    }
}
