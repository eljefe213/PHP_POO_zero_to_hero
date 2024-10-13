<?php

spl_autoload_register(function ($class) {
    $path = dirname(__DIR__) . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});

use Class\Paypal\Payment as PaymentPaypal;
use Class\Stripe\Payment as PaymentStripe;

$paymentPaypal = new PaymentPaypal();
$paymentStripe = new PaymentStripe();
var_dump($paymentPaypal, $paymentStripe);