<?php

namespace App\Services\Payment;

interface PaymentHandler
{
    public function pay(Invoice $invoice);
}
