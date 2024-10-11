<?php

require_once('./Class/Cart.php');

$cart = new Cart(0, 100);

$cart->discount(50);

var_dump($cart);
