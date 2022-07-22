<?php

namespace App\Services\Payment;

abstract class PaymentMethod
{

    public function __construct(protected PaymentHandler $paymentHandler)
    {
    }

    abstract public function startPay(Invoice $invoice);
}
