<?php

class User
{
    public $payment;
    public function __construct(Payable $payment)
    {
        $this->payment = $payment;
    }
    public function payNow()
    {
        $this->payment->pay();
    }
}

interface Payable
{
    public function pay();
}
class Bkash implements Payable
{

    public function pay()
    {
        echo 'Pay by Bkash!';
    }
}
class Rocket implements Payable
{

    public function pay()
    {
        echo 'Pay by Rocket!';
    }
}
class Cash implements Payable
{

    public function pay()
    {
        echo 'Pay by Cash!';
    }
}
$user = new User(new Cash());

$user->payNow();
