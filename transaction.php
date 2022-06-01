<?php

declare(strict_types=1);

class Transaction{
    //Now create a object on your another file

    //It should have an amount and description properties

    //Define the visibility of the property, called acess modifiers
    # Public - Accessible to everyone interacting with the object even outside the class
    # Private - Only accessible within the class itself
    # Protected

    private float $amount; //= 15; //With the type definition its not going to show NULL if you dont put a value
    private string $description;

/*
CREATING THE CONSTRUCTOR 
- We use constructor to initialize our properties
- The constructor method is a special function also called as a
magic method that will be called whenever a new instance of the 
class is created
*/

    public function __construct(float $amount, string $description)
    {
        //this - Refers to the instance from which the method was called
        $this->amount = $amount;
        $this->description = $description;
        //Now we have to pass the arguments to our constructor on the other file
    }

/*
CREATE METHOD 
- Creating a method that will add the tax amount to the transaction amount
- Methods should have the access modifier similar to the properties 

*/
    public function addTax(float $rate): Transaction
    {
        $this->amount += $this->amount * $rate / 100;

        return $this;
    }

/*

CREATE METHOD 
- Creating a method that will add a descount
*/
    public function applyDiscount(float $rate): Transaction
    {
        $this->amount -= $this->amount * $rate / 100;

        return $this;
    }

/*

CREATE METHOD 
- Creating a method that will return the amount
*/
    public function getAmount(): float 
    {
        return $this->amount;
    }


    public function __destruct()
    {
        echo 'Destruct ' . $this->description . '<br/>';
    }

    //If you put the exit the destruct will run but it will not be printed
    //If you call the destruct in one class, it will not work on the otrans classes that you may have


}




?>