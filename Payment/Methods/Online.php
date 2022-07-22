<?php

namespace App\Services\Payment\Methods;

use App\Services\Payment\Invoice;
use App\Services\Payment\PaymentMethod;

class Online extends PaymentMethod
{
    public function startPay(Invoice $invoice)
    {
        // insert in db
        
        return $this->paymentHandler->pay($invoice);
    }
}
