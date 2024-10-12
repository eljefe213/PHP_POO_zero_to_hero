<?php

require_once('./Class/Paypal/Payment.php');
require_once('./Class/Stripe/Payment.php');

$paymentPaypal = new class\Paypal\Payment();
$paymentStripe = new class\Stripe\Payment();
var_dump($paymentPaypal, $paymentStripe);