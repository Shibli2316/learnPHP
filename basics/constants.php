<?php

// use of constants are to make sure that the value of the variable does not change during the program

// define("name","value", "case sensitive");
define("STATUS_PAID","paid");
echo STATUS_PAID;

// It can also be used to check if the constant is defined or not. If it is defined then the following code returns 1 else nothing is printed.
echo defined("STATUS_PAID");


// The const keyword can also be used to for the same code the difference is that the const keyword is defined at compile time while define is defined at runtime
// const STATUS_PAID = "paid";

// we can make use of define keyword while the code is running like the following code

if(true){
    define("STATUS_PAID","paid");
    // const FOO  = "BAR";  doing this with the const keywond will give an error
}


// variable variable
$foo = 'bar';
$$foo = 'baz';
$bar = 'baz';