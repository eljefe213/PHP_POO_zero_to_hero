<?php

require_once('./Class/Paypal/Payment.php');
require_once('./Class/Stripe/Payment.php');

$payment = new Payment();
var_dump($payment);