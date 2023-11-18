<?php

$bool = true;
echo gettype($bool);
var_dump($bool);

$arrayMakeing = [2,4.5, 'hi'];
// To print array in readable format use this
print_r($arrayMakeing);

// type hinting
function sum(int $x, int $y){
    return $x + $y;
}

// if we specify the type in the function parameter it is called type hinting and it changes the variable to the desired type


// Type casting
$x = (int)'5';

$firstname = 'Will';
$lastname = 'Smith';

$name = $firstname ." ". $lastname;
echo $name .'<br />';
// forward slicing
echo $name[0];

// backward slicing
echo $name[-2]."<br />";

// we can also mutate the char in string like
$name[2] = 'Z';
echo $name . '<br />';

// we can also change the string position that is out of its bound as it will just add spaces between it



$a = 1;
$b = 2;
// Heredoc: uses double string --- Variable can be used 
// +++ It can include spaces html tags quotes and everything. Keep in mind that everything in this is interpreted as it is.
$text = <<< TEXT
Line 1 $a
Line 2 $b
Line 3

TEXT;

echo nl2br($text);
echo '<br />';


// Nowdoc: Uses single string --- No variable
$text2 = <<< 'TEXT'
Line 1 $a
Line 2 $b
Line 3

TEXT;

echo nl2br($text2);

// in PHP array are like any other programming language but we can also assign keys to it by mannualy. By default it is numeroc starting from 0
$programingLanguages = ['java', 'python', 'php'];

print_r($programingLanguages);

// TO know if an item exists in an array at some index use isset
var_dump(isset($programingLanguages[5]));

echo '<pre>';
print_r($programingLanguages);
echo '</pre>';

// Array are mutable that means it can be changed by accessing the keys that are assigned to it.

// To push an element at the end just use empty square brackets and assign the value to it. We can also use array_push()
$programingLanguages[] = 'C++';

echo '<pre>';
print_r($programingLanguages);
echo '</pre>';


array_push($programingLanguages, 'C#', 'c');
echo '<pre>';
print_r($programingLanguages);
echo '</pre>';

// Named key array is called associatd array

$newLanguages = [
    'php' => '8.0',
    'python' => '3.9'
];

echo '<pre>';
print_r($newLanguages);
echo '</pre>';


// Array pop and array ahift is used to remove elements. We also uses unset with index
// To check if the key exists we use array key exists


$f = 'abc';
$f++;
echo $f;