<?php

require_once('./Class/Paypal/Payment.php');
require_once('./Class/Stripe/Payment.php');
require_once('./Class/Users/User.php');

use Class\Paypal\Payment as PaymentPaypal;
use Class\Stripe\Payment as PaymentStripe;

$paymentPaypal = new PaymentPaypal();
$paymentStripe = new PaymentStripe();
var_dump($paymentPaypal, $paymentStripe);