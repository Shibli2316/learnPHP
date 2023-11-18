<?php
// Used to print something on the screen
echo "Hello world";

// print can also be used to print something on the screen but it has a return value of 1
print "hello world\n";


// variables are assigned by value (mostly)
$x = 1;
$y = $x;
$x = 3;
echo $y;


// if you want the values to change with the variable use it by reference that is by going in their address
$x = 1;
$y = &$x;
$x = 3;
echo $y;


// variables can be used with double quotes, parenthesis and also by dot operators.
$name = "Shibli";
echo "$name";
echo "{$name}";
echo "hi, ".$name; 