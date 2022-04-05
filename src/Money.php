<?php

namespace Hillel;

class Money
{
    private int|float $amount;
    private Currency $currency;

    public function __construct(int|float $amount, Currency $currency){
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }


    public function getAmount(): float|int
    {
        return $this->amount;
    }


    public function getCurrency(): Currency
    {
        return $this->currency;
    }


    public function setAmount(float|int $amount): void
    {
        $this->amount = $amount;
    }


    public function setCurrency(Currency $currency): void
    {
        $this->currency = $currency;
    }

    public function equals(Money $money): bool
    {
       return $this == $money;
    }

    public function add(Money $money): Money
    {
        return Money::sum($this, $money);
    }

    public static function sum(Money $value, Money $value2): Money
    {
        if ($value->currency != $value2->currency) {
            throw new \Exception("Разные валюты");
        }
        $result = $value->amount + $value2->amount;
        return new Money($result, $value->currency);
    }



}