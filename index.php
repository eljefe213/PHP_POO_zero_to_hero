<?php

// require_once('./Class/Paypal/Payment.php');
// require_once('./Class/Stripe/Payment.php');
// require_once('./Class/Users/User.php');

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});

use Class\Paypal\Payment as PaymentPaypal;
use Class\Stripe\Payment as PaymentStripe;

$paymentPaypal = new PaymentPaypal();
$paymentStripe = new PaymentStripe();
var_dump($paymentPaypal, $paymentStripe);