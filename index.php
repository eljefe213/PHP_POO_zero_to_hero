<?php

require_once('./Class/Cart.php');

$cart = new Cart(0, 100);
var_dump($cart->getTotalPrice());
