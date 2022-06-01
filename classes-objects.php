<?php

/*
A CLASS is a blueprint and an object is something
that you built from that blueprint, an instance of
that class

- A class have variables called properties 
and functions which are called methods

std class - PHP generic class implementation

- CREATE A FILE CALLED: transaction.php 
- On this file, create the class
- The recommended is to have a single class
on each file and nothing more on that file
- Now create your object here

*/
declare(strict_types=1);

require_once 'transaction.php';

$transaction = new Transaction(100, 'Transaction 1');
//You have to require the other file 
// 100 are the amount and 'Transaction 1' are the description, the arguments

// We can change the propertie putting $transactin->amount = 15;
//$transaction->amount = 15;

$transaction->addTax(8); 

$transaction->applyDiscount(10); //This is 10%

// We can do like this: $transaction->addTax(8)->applyDiscount(10);

/*
Or we could do this:

$amount = (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10)
    ->getAmount();

*/

//var_dump($transaction ->amount);
var_dump($transaction->getAmount());















?>