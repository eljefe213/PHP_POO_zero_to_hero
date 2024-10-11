<?php

require_once('./Class/Cart.php');

$cart = new Cart(0, 100);

$cart->discount(20);

var_dump($cart);
