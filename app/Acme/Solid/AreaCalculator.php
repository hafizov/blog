<?php
/**
 * Created by PhpStorm.
 * User: abdullo
 * Date: 2/5/19
 * Time: 3:58 PM
 */

namespace App\Acme\Solid;

interface PaymentMethodInterface
{
    public function acceptPayment($receipt);
}

class CashPaymentMethod implements PaymentMethodInterface
{

    public function acceptPayment($receipt)
    {
        // TODO: Implement acceptPayment() method.
    }
}

class Checkout
{
    public function begin(Receipt $receipt, PaymentMethodInterface $payment)
    {
        $payment->acceptPayment($receipt);
    }

    public function acceptCash($receipt)
    {

    }
}
