<?php

require_once 'vendor/autoload.php';


$USD = new \Hillel\Currency("USD");
$EUR = new \Hillel\Currency("EUR");

$cash1 = new \Hillel\Money(200, $USD);
$cash2 = new \Hillel\Money(100, $USD);

$cash3 = new \Hillel\Money(100, $EUR);

if ($cash1->equals($cash2)) {
    echo 'm1 == m2';
}



$total = $cash1->add($cash2);
$result = \Hillel\Money::sum($cash1, $cash2);


echo $total->getAmount() .PHP_EOL;
