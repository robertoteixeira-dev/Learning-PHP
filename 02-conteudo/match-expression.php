<?php

$paymentStatus = 1;

match($paymentStatus) {
    1 => print 'Paid',
    2 => print 'Payment Declined',
    0 => print 'Pending Payment',
    default => print 'Unkown payment status',
};

//We can put a variable before match or a function 
// To use or I could put for example,  2, 3 => print ...


//SWITCH compares using == 
//MATCH compares using ===


// PHP built in function to work in array

?>