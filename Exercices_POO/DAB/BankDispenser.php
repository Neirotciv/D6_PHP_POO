<?php

require_once './BankDispenserInterface.php';

/**
 * Represents a bank dispenser entity, must implement BankDispenserInterface
 */
class BankDispenser implements BankDispenserInterface
{
    private string $account;
    private float $balance;

    /**
     * Deposit of an amount into an account
     * @param string $account - The customer's account number
     * @param string $amount - The amount to be credited to the account
     * @return float - The new balance
     */
    public function deposit(string $account, float $amount): float
    {
        $this->balance += $amount;
        return $this->balance;
    }

     /**
     * Withdraw amount from an account
     * @param string $account - The customer's account number
     * @param string $amount - The amount to be withdrawn from the account
     * @return float - The new balance
     */
    public function withdraw(string $account, float $amount): float
    {
        // Subtract the withdrawal amount from the account's balance
        $this->balance -= $amount;
        return $this->balance;
    }
}
