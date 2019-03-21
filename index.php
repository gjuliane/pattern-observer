<?php
include_once('Buyer.class.php');
include_once('Product.class.php');

$buyer1 = new Buyer('Gustavo');
$buyer2 = new Buyer('Ezequiel');
$buyer3 = new Buyer('Norma');

$product1 = new Product('Xiaomi Mi 8 SE', 7900);

$product1->attach($buyer1);
$product1->attach($buyer2);

$product2 = new Product('Xiaomi Mi 8 lite', 5500);

$product2->attach($buyer2);
$product2->attach($buyer3);

$product1->setNewPrice(5200);
$product2->setNewPrice(4900);