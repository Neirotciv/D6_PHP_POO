<?php

// Define interface
Interface BankDispenserInterface
{
    public function deposit(string $account, float $amount): float;
    public function withdraw(string $account, float $amount): float;
}
