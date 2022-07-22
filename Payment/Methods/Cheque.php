<?php

namespace App\Services\Payment\Methods;

use App\Services\Payment\Invoice;
use App\Services\Payment\PaymentMethod;

class Cheque extends PaymentMethod
{
    public function startPay(Invoice $invoice)
    {
        return $this->paymentHandler->pay($invoice);
    }
}