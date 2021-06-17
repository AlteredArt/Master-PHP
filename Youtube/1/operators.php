<?php
// <!-- Operators -->

// <!-- Arithmetic Operators -->
$x = 10;
$y = 2;
var_dump($x - $y);
// If they  are not divisible, the return will be a float
var_dump($x / $y); 
// Infinity, as diving by zero will break
var_dump(fdiv($x, $y));
// Module, only works if there is a remainder, floats are cast to integers.
var_dump($x % $y);

// Assignment Operators
$x = 5;
$x = $y = 10;
$x = ($y = 10) + 5;
// $x = $x * 3; 
$x *= 3;

// String Operators
$words = 'Hello';
$words = $words . 'World';
// or
$words .= 'World';

// Comparison Operators
== : Compare
=== : Strict Compare
!= : Not Comparison
!== : Not strict comparison
<> : loose inequality
< > : Greater than less than
<==> : Spaceship operator, combines greater than , less than, equal signs
?? : ternary operators
?: :

// Strict Comparison
$x = 'Hello World';
$y = strpos($x, 'H');

if($y === false) {
    echo 'H not found';
} else {
    echo 'H Found at index' . $y;
};

// Ternary Operator (Expects 3 values)
$a = 'Meow';
$b = 'Chloe';

$result = $b === false ? 'H Not Found' : 'H Found at index' . $y;


// No Coalescing operator
$c = null
$d = $c ?? 'hello';

// Error Control (@)
$f = @file('file.txt');

// Increment & Decrement (++, --) )nly works with numbers and strings.
$x = 5
// Inc / Dec after the fact
$x++
$x--
// Pre Inc / Dec
++$x
--$x 
// String Inc
$word = 'abc';
echo ++$word;
// 'abd'

