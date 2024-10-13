<?php

// spl_autoload_register(function ($class) {
//     $path = dirname(__DIR__) . '/' . str_replace('\\', '/', $class) . '.php';
//     if (file_exists($path)) {
//         require_once $path;
//     }
// });

require '../vendor/autoload.php';

use Class\Paypal\Payment as PaymentPaypal;
use Class\Stripe\Payment as PaymentStripe;
use \Colors\RandomColor;

$paymentPaypal = new PaymentPaypal();
$paymentStripe = new PaymentStripe();

var_dump(RandomColor::one());