<?php

// TODO refactoriser le code pour respecter le principe Single Responsability de la programmation SOLID


class NoBalanceAvailableException extends \Exception {}

class Product {
    public function getValue() {}
}

class Account 
{
    public function getBalance() {}
    public function setBalance() {}



    public function calculateBalance(Customer $customer)
    {
        $customer->getAccount()->setBalance($customer->getAccount()->getBalance() - $this->getValue());
    }
}

class Customer 
{
    public function getAccount() {}

    public function haveBalanceAvailable(Customer $customer, $value)
    {
        return $customer->getAccount()->getBalance() >= $value;
    }
}

class Sale
{
    public function getValue() {}
    public function setValue() {}
    
    public function sell(array $products, Customer $customer)
    {
        $value = $this->calculateTotalValue($products);
        
        if (!$this->haveBalanceAvailable($customer, $value)) {
            throw new NoBalanceAvailableException();
        }

        /*..... something.....*/
        
        $this->setValue($value);
        $this->calculateBalance($customer);
    }
    
    
    
    
    
    private function calculateTotalValue(array $products)
    {
        $value = 0;
    
        foreach ($products as $product) {
            $value += $product->getValue();
        }
    
        return $value;
    }
}

