<?php
// Switch statement does loose comparison that means the datatype is not checked while comparing the cases.
// the benifit of swtich statement is that it gets executed only once that means it does not call the function or variable while comparing it with other cases.
// Slightly faster that if else 


$paymentStatus = 'paid';

switch($paymentStatus){
    case 'paid':
        echo 'Paid';
        break;
    case 'pending':
        echo 'Pending';
        break;

// We can add different cases on top of each other and it works like an or condition like this
    case 'rejected':
    case 'declined':
        echo 'Declined';
        break;
    
    default:
        echo 'Unknown payment status';
}